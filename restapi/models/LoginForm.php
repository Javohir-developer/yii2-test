<?php


namespace restapi\models;

use common\models\User;
use Yii;
use yii\base\BaseObject;
use yii\base\Model;
use yii\httpclient\Client;

/**
 * Login form
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;

    private $_user;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    public function login(){
        $user = $this->getUser();
        if ($this->validate()){
            $token = Yii::$app->security->generateRandomString(120);
            $user->access_token = $token;
            return $user->save() ? $token : null;
        }
    }

    public function test(){
        $client = new Client(['baseUrl' => 'https://jsonplaceholder.typicode.com/users']);
        $response = $client->createRequest()
            ->setFormat(Client::FORMAT_JSON)->send();
        $datas = $response->getData();
        foreach ($datas as $data){
            $massiv[] = ['id'=>$data['id'], 'name'=>$data['name'], 'email'=>$data['email']];
        }
        return $massiv;
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Incorrect username or password.');
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return bool whether the user is logged in successfully
     */
//    public function login()
//    {
//        if ($this->validate()) {
//            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
//        }
//
//        return false;
//    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }
}

<style>
    .font{
        font-family: Inter;
        font-style: normal;
        font-weight: normal;

    }
    .fond1{
        font-size: 16px;
        line-height: 19px;
        color: #283E54;
    }
    .test{
        font-size: 14px;
        line-height: 17px;
        color: #A3B2C0;
    }
    .buts{
        width: 215px;
        height: 46px;
    }
    .buts1{
        width: 352px;
        height: 46px;
        border-radius: 10px;
    }
    .card{
        border-radius: 1.25rem!important;
    }
    .modal1{
        font-size: 18px;
        line-height: 22px;
    }
    .modal-header {
        border-bottom: 1px solid #e5e5e500!important;
        display: inline!important;
    }
    .modal-content {
        border-radius: 12px !important;
        width: 75%;
    }
    .modal{
        top:150px;
    }
</style>
<div class="row">
    <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fond1">PayFly Design</h5>
                <p class="card-text test">Раздел: <span style="color: #283E54;">Дизайн</span></p>
                <p class="card-text test">Дата создания: <span style="color: #283E54;">10.10.2020</span></p>
                <button type="button" class="btn buts btn-outline-warning">Открыть</button>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fond1">PayFly Design</h5>
                <p class="card-text test">Раздел: <span style="color: #283E54;">Дизайн</span></p>
                <p class="card-text test">Дата создания: <span style="color: #283E54;">10.10.2020</span></p>
                <button type="button" class="btn buts btn-outline-warning">Открыть</button>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fond1">PayFly Design</h5>
                <p class="card-text test">Раздел: <span style="color: #283E54;">Дизайн</span></p>
                <p class="card-text test">Дата создания: <span style="color: #283E54;">10.10.2020</span></p>
                <button type="button" class="btn buts btn-outline-warning">Открыть</button>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card" data-toggle="modal" data-target="#exampleModal">
            <div class="card-body" style="border: 1px solid #FF6F20;">
                <h5 class="card-title fond1" style="color: #FF6F20;padding: 45px; cursor: pointer">Создать доску </h5>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" style="opacity: 1; border-right: 10px;" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title modal1" id="exampleModalLabel"> Новая доска</h5>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Название:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Sunrise Tour Inc">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Раздел:</label>
                        <input type="text" class="form-control" id="recipient-name" placeholder="Placeholder">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn buts1 btn-outline-warning">Открыть</button>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn buts1 btn-outline-warning" data-dismiss="modal">Отмена</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
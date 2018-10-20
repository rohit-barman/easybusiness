<style>
    .calendar{

        height: 300px;
    }
    .day,.other-month,.today,.calendar th{
        width: 121px;
        border:1px solid #D3D3D3;
        text-align: center;
        margin: 10px;
        height: 55px;
        font-size: 20px;
        
        
    }
    .today{
        color: #007bff;
        background: #bdc3c7;
    }
    .other-month{
        color: gray;
        color: #C0C0C0;
    }
    .day a{
        color: #ff4b5a;    
    }

</style>


<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row card">
                <div class="col-lg-12">
                    <div class="row card">
                        <div class="card-header">
                            <strong>Events</strong>
                            <small>by dates</small>
                        </div>
                        <div class="card-body card-block">
                            <?= $calendar ?>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
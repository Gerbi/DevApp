<template>
    <main class="main">
        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="container-fluid">
            <!-- Ejemplo de tabla Listado -->
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> Categorías

                </div>
                <div class="card-body" style="background-color: black;">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="card card-element">
                                <div class="card-body">
                                    <div class="element__symbol">Rh</div>
                                    <div class="element__name">Rhodium</div>

                                </div>

                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="card card-element">
                                <div class="card-body">
                                    <div class="element__symbol">Rh</div>
                                    <div class="element__name">Rhodium</div>

                                </div>

                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="card card-element">
                                <div class="card-body">
                                    <div class="element__symbol">Rh</div>
                                    <div class="element__name">Rhodium</div>

                                </div>

                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="card card-element">
                                <div class="card-body">
                                    <div class="element__symbol">Rh</div>
                                    <div class="element__name">Rhodium</div>
                                </div>

                            </div>
                        </div>


                    </div>

                </div>
            </div>
            <!-- Fin ejemplo de tabla Listado -->
        </div>

    </main>
</template>

<script>
    export default {
        data(){


        }
    }
</script>
<style>
    .card-element {

        background: rgba(30, 117, 123, 0.34);

        text-align: center;
        text-shadow: 0 0 10px white;
        border: 1px solid rgba(255, 255, 255, 0.4);
        border-radius: 3px;
        color: white;
        user-select: none;
    }
    .element {
        position: relative;
        width: 50px;
        height: 50px;
        margin-left: -25px;
        margin-top: -25px;
        background: rgba(30, 117, 123, 0.34);
        left: 50%;
        top: 50%;
        text-align: center;
        text-shadow: 0 0 10px white;
        border: 1px solid rgba(255, 255, 255, 0.4);
        border-radius: 3px;
        color: white;
        user-select: none;
    }

    .element__symbol {
        line-height: 30px;
        font-size: 2em;
    }
    .element__name {
        line-height: 20px;
        font-size: 12px;
    }

    .mostrar{
        display: list-item !important;
        opacity: 1 !important;
        position: absolute !important;
        background-color: #3c29297a !important;
    }
    .div-error{
        display: flex;
        justify-content: center;

    }
    .text-error{
        color: red !important;
        font-weight: bold;
    }
</style>

<?php
// Llamamos al archivo de conexion
require_once("../../config/conexion.php");
if (isset($_SESSION["usu_id"])) {

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php require_once("../html/MainHead.php"); ?>

    <title>Empresa::Perfil</title>

</head>

<body>

    <?php require_once("../html/MainMenu.php"); ?>

    <?php require_once("../html/MainHeader.php"); ?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="#">Perfil</a>
            </nav>
        </div>
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Perfil</h4>
            <p class="mg-b-0">Pantalla Perfil</p>
        </div>

        <div class="br-pagebody">

            <div class="br-section-wrapper">
                <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Perfil</h6>
                <p class="mg-b-30 tx-gray-600">Actualice sus datos.</p>

                <div class="form-layout form-layout-1">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Nombre: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="usu_nom" id="usu_nom" placeholder="Nombre"
                                    required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Apellido Paterno: <span
                                        class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="usu_apep" id="usu_apep"
                                    placeholder="Apellido Paterno" required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Apellido Materno: <span
                                        class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="usu_apem" id="usu_apem"
                                    placeholder="Apellido Materno" required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Correo Electrónico: <span
                                        class="tx-danger">*</span></label>
                                <input class="form-control " type="text" name="usu_correo" id="usu_correo" readonly>

                            </div>
                        </div><!-- col-6 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Contraseña: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="password" name="usu_pass" id="usu_pass"
                                    placeholder="Contraseña" required>
                            </div>
                        </div><!-- col-6 -->
                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Sexo: <span class="tx-danger">*</span></label>
                                <select class="form-control select2" name="usu_sex" id="usu_sex"
                                    data-placeholder="Seleccione">
                                    <option label="Seleccione"></option>
                                    <option value="F">Femenino</option>
                                    <option value="M">Masculino</option>
                                </select>
                            </div>
                        </div><!-- col-6 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Teléfono: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="usu_telf" id="usu_telf"
                                    placeholder="Teléfono" required>
                            </div>
                        </div><!-- col-6 -->
                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-info" id="btnactualizar">Actualizar</button>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </div>

        </div>

    </div>
    <!-- ########## END: MAIN PANEL ########## -->

    <?php require_once("../html/MainJs.php"); ?>
    <script src="usuperfil.js"></script>

</body>

</html>
<?php
} else {
    // Si no ha iniciado sesion se redireccion a Login
    header("location:" . Conectar::ruta() . "view/404/");
}
?>
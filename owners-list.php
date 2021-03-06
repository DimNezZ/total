<?php require_once 'template/header.php'; ?>
<?php $owners = Owners::getAll(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card block">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Владельцы</h5>
                    <a href="add-owner.php" aria-label="Добавить город">
                        <img class="btn-icon" src="images/plus.svg" alt="" aria-hidden="true">
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped mb-0">
                        <thead>
                        <tr>
                            <th>Название</th>
                            <th>Тип организации</th>
                            <th>Адрес</th>
                            <th>Телефон</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($owners as $key => $owner) {
                            print("
                                    <tr>
                                        <td>{$owner['name']}</td>
                                        <td>{$owner['type']}</td>
                                        <td>{$owner['address']}</td>
                                        <td>{$owner['tel']}</td>
                                    </tr>
                                ");
                        } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once 'template/footer.php'; ?>
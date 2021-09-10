<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User List</h1>
    <!-- <?php d($user); ?> -->


    <div class="card mb-3" style="max-width: 540px;">
        <div class="card-body">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?= base_url(); ?>/img/<?= $user->user_image; ?>" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= $user->username; ?></li>
                            <li class="list-group-item"><?= $user->email; ?></li>
                            <?php if ($user->fullname) : ?>
                                <li class="list-group-item"><?= $user->fullname; ?></li>
                            <?php endif; ?>
                            <li class="list-group-item">
                                <span class="badge badge-<?= ($user->name == 'admin') ? 'success' : 'warning' ?> "><?= $user->name; ?></span>
                            </li>
                            <li class="list-group-item"><small><a href="<?= base_url('admin'); ?>">&laquo;Back to User list</a></small></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
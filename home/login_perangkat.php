<h4 class="text-center">Akses Login Perangkat <?= sprintf('%s %s',
			ucwords($this->setting->sebutan_desa),
			@$desa['nama_desa']
    ) ?></h4>
<form action="<?= site_url('siteman/auth')?>" method="post">
<div class="form-group">
</div>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon">Username</div>
            <input name="username" required type="text" class="form-control" placeholder="Username">
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-addon">Password</div>
            <input name="password" required type="password" class="form-control" placeholder="Password">
        </div>
    </div>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-success">Masuk</button>
    </div>
</form>

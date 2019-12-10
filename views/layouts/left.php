<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>
                    <?php 
                    if (Yii::$app->user->isGuest) {
                      echo "tamu";
                    } 
                    else {
                    echo Yii::$app->user->identity->username;
                }
                    ?>
                </p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>  ->
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'File', 'options' => ['class' => 'header']],
                    ['label' => 'Login','icon' => 'unlock-alt', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Logout', 'url' => ['site/logout'],'template' => '<a href="{url}" data-method="post"><i class="fa fa-sign-out"></i>{label}</a>'],
                    

                    [
                        'label' => 'Administrator',
                        'icon' => 'gears',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Data User', 'icon' => 'file-code-o', 'url' =>'#'],
                             ['label' => 'Setting Hak Akses User', 'icon' => 'file-code-o', 'url' =>'#'],
                             ['label' => 'Buat Akun User', 'icon' => 'file-code-o', 'url' => ['/site/signup']],
                        ],],
                    [
                        'label' => 'Pasien Radiologi',
                        'icon' => 'users',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Register Pasien', 'icon' => 'send', 'url' => ['/reg-pasien/create']],
                          //   ['label' => 'Register Pasien', 'icon' => 'send', 'url' => ['/kunjungan-pasien/index']],
                             ['label' =>'Data Pasien Radiologi', 'icon' => 'group', 'url' => ['/reg-pasien/index']],
                             ['label' =>'Hasil Analisa Dokter', 'icon' => 'server', 'url' => ['/reg-pasien2/hasil']],
                        ],],    
                    [
                        'label' => 'Dokter Radiologi',
                        'icon' => 'user-plus',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Input Expertise', 'icon' => 'pencil', 'url' => ['/reg-pasien2/index']],
                            // ['label' =>'Data Pasien Radiologi', 'icon' => 'file-code-o', 'url' => ['/reg-pasien/index']],
                            // ['label' =>'Buat Akun User', 'icon' => 'file-code-o', 'url' => ['/site/signup']],
                        ],],
                    [
                        'label' => 'Laporan Radiologi',
                        'icon' => 'newspaper-o',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Jumlah Kunjungan Pasien', 'icon' => 'plus-square', 'url' => ['/reg-pasien2/index']],
                            // ['label' =>'Data Pasien Radiologi', 'icon' => 'file-code-o', 'url' => ['/reg-pasien/index']],
                            // ['label' =>'Buat Akun User', 'icon' => 'file-code-o', 'url' => ['/site/signup']],
                        ],],
                  
                ],
            ]
        ) ?>

    </section>

</aside>

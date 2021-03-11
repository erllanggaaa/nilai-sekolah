            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li>
                        <a href="../index.php">
                            <i class="menu-icon glyphicon glyphicon-home"></i>
                            <span class="menu-text"> Home </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-gear"></i>
                            <span class="menu-text"> Setting </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="?profile=<?php echo $_SESSION['id']; ?>">
                                    <span class="menu-text">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="../logout.php">
                                    <span class="menu-text">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </li>                    
                    <?php 
                        if (isset($_SESSION['access'])) {
                            if ($_SESSION['access'] == 'admin') {
                    ?>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-users"></i>
                            <span class="menu-text"> Users </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="?users=admin">
                                    <span class="menu-text">Admin</span>
                                </a>
                            </li>
                            <li>
                                <a href="?users=pembimbing">
                                    <span class="menu-text">Pembimbing</span>
                                </a>
                            </li>
                            <li>
                                <a href="?users=siswa">
                                    <span class="menu-text">Siswa</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-book"></i>
                            <span class="menu-text"> Akademik </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="?akademik=level">
                                    <span class="menu-text">Level</span>
                                </a>
                            </li>
                            <li>
                                <a href="?akademik=tahun">
                                    <span class="menu-text">Tahun Ajaran</span>
                                </a>
                            </li>
                            <li>
                                <a href="?akademik=pelajaran">
                                    <span class="menu-text">Mata Pelajaran</span>
                                </a>
                            </li>
                            <li>
                                <a href="?akademik=bimbel">
                                    <span class="menu-text">Data Bimbel</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-signal"></i>
                            <span class="menu-text"> Nilai </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="?nilai=input">
                                    <span class="menu-text">Input Nilai</span>
                                </a>
                            </li>
                            <li>
                                <a href="?nilai=tampil">
                                    <span class="menu-text">Tampilkan Nilai</span>
                                </a>
                            </li>
                            <li>
                                <a href="?nilai=laporan">
                                    <span class="menu-text">Laporan Nilai</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-thumbs-up"></i>
                            <span class="menu-text"> Artikel </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="?artikel=list">
                                    <span class="menu-text">List Artikel</span>
                                </a>
                            </li>
                            <li>
                                <a href="?artikel=kategori">
                                    <span class="menu-text">Kategori</span>
                                </a>
                            </li>
                        </ul>
                    </li>                                        
            
                    <?php
                            }elseif ($_SESSION['access'] == 'pembimbing') {
                                
                    ?>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-signal"></i>
                            <span class="menu-text"> Nilai </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="?nilai=input">
                                    <span class="menu-text">Input Nilai</span>
                                </a>
                            </li>
                            <li>
                                <a href="?nilai=tampil">
                                    <span class="menu-text">Tampilkan Nilai</span>
                                </a>
                            </li>
                            <li>
                                <a href="?nilai=laporan">
                                    <span class="menu-text">Laporan Nilai</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-thumbs-up"></i>
                            <span class="menu-text"> Artikel </span>

                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="?artikel=list">
                                    <span class="menu-text">List Artikel</span>
                                </a>
                            </li>
                            <li>
                                <a href="?artikel=kategori">
                                    <span class="menu-text">Kategori</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <?php
                            }elseif ($_SESSION['access'] == 'siswa') {
                    ?>
                    <li>
                        <a href="?akademik=grafik">
                            <i class="menu-icon fa fa-leaf"></i>
                            <span class="menu-text"> Grafik </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-signal"></i>
                            <span class="menu-text"> Nilai </span>

                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="?nilai=tampil">
                                    <span class="menu-text">Tampilkan Nilai</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <?php
                            }
                        }
                    ?>                   
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
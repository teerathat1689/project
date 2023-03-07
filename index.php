<?php 

    session_start();
    require_once 'config/db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="ดูเพิ่มเติมport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    <title>Welcome_mywebsite</title>
</head>
<body>
    <!-- start menu --> 
    <div class="bg-warning p-3 navbar navbar-expand-sm ">
        <div class="container ms-auto">
            <a href="#" class="navbar-brand text-white">ติดต่อเรา <i class="fa-solid fa-comment-dots"></i></i></a>
                <ul class="navbar-nav ">
                    <li class="nav-item"><a href="#" class="nav-link text-white" data-bs-toggle="modal" data-bs-target="#mymodal"><i class="fa-solid fa-person-circle-plus"></i> สมัครสมาชิก </a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white" data-bs-toggle="modal" data-bs-target="#mymodal-2"><i class="fa-solid fa-user-doctor"></i> เข้าสู่ระบบ</a></li>
            </div>
        </div>
    </div>
    <!-- end menu -->

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-2 sticky-top">
        <div class="center">
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">หน้าแรก</a>
              </li>
              <li class="nav navbar-nav">
                <a class="nav-link" href="#">เนื้อหา</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  ประเภทเนื้อหา
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">คณิตศาตร์</a></li>
                  <li><a class="dropdown-item" href="#">วิทย์ศาสตร์</a></li> 
                  <li><a class="dropdown-item" href="#">คอมพิวเตอร์</a></li>
                  <li><a class="dropdown-item" href="#">อังกฤษ</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- end navbar -->
    <!-- start body-list -->
    <div class="album py-5 " id="bg">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
              <div class="card shadow-sm ">
                  <img src="img/page.png" alt="" class="img-list">
                <div class="card-body">
                  <p class="card-text">ทำความรู้จักHTML</p>
                  <p class="card-text">ทำความรู้จักภาษาHTMLเบื้องต้นและการใช้คำสั่งสำหรับผู้ที่เริ่มศึกษาภาษาHTMLโดยเบื้องต้น</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">ดูเพิ่มเติม</button>

                    </div>
                    <small class="text-muted">ราคา : $ 199</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col"> 
              <div class="card shadow-sm ">
                  <img src="img/cal.jfif"  alt="" class="img-list">
                <div class="card-body">
                  <p class="card-text">แคลคูลัสสำหรับเด็กม.6 </p>
                  <p class="card-text">แคลคูลัสสำหรับเด็กม.6 เรียนรู้แคลคูลัสสำหรับติวสอบและวิธีการแก้โจทย์แคลคูลัส</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">ดูเพิ่มเติม</button>
                    </div>
                    <small class="text-muted">ราคา : $ 199</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm ">
                  <img src="img/PH-1.jfif"   alt="" class="img-list">
                <div class="card-body">
                  <p class="card-text">ติวเข้มฟิสิกก์เตรียมพร้อมสอบเข้ามหาลัย</p>
                  <p class="card-text">ติวเข้มสอบวิชาฟิสิกก์สำหรับเข้ามหาลัย โดยติวเข้มตั้งแต่เบื้องต้นจนลงลึก </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">ดูเพิ่มเติม</button>
                    </div>
                    <small class="text-muted">ราคา : $ 199</small>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="col">
              <div class="card shadow-sm ">
                  <img src="img/PH-2.png" alt="" class="img-list">
                <div class="card-body">
                  <p class="card-text">ฟิสิกก์</p>
                  <p class="card-text">เรียนฟิสิกก์เบื้องต้นสำหรับนักเรียนนักศึกษาที่อยากจะศึกษาในวิชาฟิกสิก</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">ดูเพิ่มเติม</button>
                    </div>
                    <small class="text-muted">ราคา : $ 199</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm ">
                  <img src="img/excel.png" alt="" class="img-list">
                <div class="card-body">
                  <p class="card-text">Excel เบื้องต้น </p>
                  <p class="card-text">เรียนรู้การใช้งานและวิธีการใช้คำสั่งต่างๆใน microsoft excel </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">ดูเพิ่มเติม</button>
                    </div>
                    <small class="text-muted">ราคา : $ 199</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm ">
                  <img src="img/PS.png" alt="" class="img-list">
                <div class="card-body">
                  <p class="card-text">เรียนรู้พื้นฐาน Photoshop</p>
                  <p class="card-text">สอนวิธีการใช้งานโปรแกรม Adobe photoshop และสอนการตัดต่อขั้นพื้นฐาน</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">ดูเพิ่มเติม</button>
                    </div>
                    <small class="text-muted">ราคา : $ 199</small>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="col">
              <div class="card shadow-sm ">
                  <img src="img/PP.jfif" alt="" class="img-list">
                <div class="card-body">
                  <p class="card-text">พื้นฐาน Premier pro</p>
                  <p class="card-text">สอนการตัดต่อขั้นพื้นฐานสำหรับผู้ที่เริ่มต้นใช้งานโปรแกรม Adobe Premier pro ขั้นเบื้องต้น</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">ดูเพิ่มเติม</button>
                    </div>
                    <small class="text-muted">ราคา : $ 199</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm ">
                  <img src="img/cal2.jfif" alt="" class="img-list">
                <div class="card-body">
                  <p class="card-text">คณิตศาตร์ ม.6</p>
                  <p class="card-text">ติวคณิตศาสตร์สำหรับเด็กม.6 อธิบายแต่ละเรื่องโดยละเอียด</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">ดูเพิ่มเติม</button>
                    </div>
                    <small class="text-muted">ราคา : $ 199</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm ">
                  <img src="img/LI.png" alt="" class="img-list">
                <div class="card-body">
                  <p class="card-text">การใช้ adobe lllustrator</p>
                  <p class="card-text">สอนวิธีการใช้ adobe lllustrator ในการออกแบบต่างๆและเครื่องมือในโปรแกรม lllustrator </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">ดูเพิ่มเติม</button>
                    </div>
                    <small class="text-muted">ราคา : $ 199</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card shadow-sm ">
                    <img src="img/html2.jfif" alt="" class="img-list">
                  <div class="card-body">
                    <p class="card-text">วิธีการใช้คำสั่งต่างๆในภาษา HTML</p>
                    <p class="card-text">สอนวิธีการใช้คำสั่งต่างๆและอธิบายขั้นตอนการทำงานของแต่ละคำสั่งในภาษา HTML</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">ดูเพิ่มเติม</button>
                      </div>
                      <small class="text-muted">ราคา : $ 199</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm ">
                    <img src="img/php.jfif" alt="" class="img-list">
                  <div class="card-body">
                    <p class="card-text">วิธีการใช้ภาษา PHP เบื้องต้น</p>
                    <p class="card-text">อธิบายเกี่ยวกับวิธีการทำงานต่างๆและวิธีการใช้งานของภาษาPHP</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">ดูเพิ่มเติม</button>
                      </div>
                      <small class="text-muted">ราคา : $ 199</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card shadow-sm ">
                    <img src="img/LR.jfif" alt="" class="img-list">
                  <div class="card-body">
                    <p class="card-text">พื้นฐาน Lightroom</p>
                    <p class="card-text">สอนวิธีการใช้งานของ adobe lightroom ขั้นเบื้องต้น</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-secondary">ดูเพิ่มเติม</button>
                      </div>
                      <small class="text-muted">ราคา : $ 199</small>
                    </div>
                  </div>
                </div>
              </div>
          </div>
              <!-- start page -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination" style="justify-content: center;margin-top: 30px;">
                        <li class="page-item"><a class="page-link" href="#">ก่อนหน้า</a></li>
                        <li class="page-item"><a class="page-link" href="index.html">1</a></li>
                        <li class="page-item"><a class="page-link" href="page-2.html">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="page-2.html">ถัดไป</a></li>
                    </ul>
                </nav>
    <!-- end page -->
        </div>
      </div>
    <!-- end body-list -->


    <!-- start footer -->
    <footer class="container mt-2 footer">
        <p>© 2019–2022  <a href="#">ติดต่อเรา</a> 
      </footer>
    <!-- end footer -->

    <!-- start modal-สมัครสมาชิก -->
    <div class="modal fade" id="mymodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">สมัครสมาชิก</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body ">
                    <form action="" >
                        <div class="form-group mb-2">
                            <label for="">User</label>
                            <input type="text" class="form-control" name="User" placeholder="ป้อนชื่อผู้ใช้งานของคุณ" aria-describedby="ชื่อผู้ใช้">
                        </div>
                        <div class="form-cgroup mb-2">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="กรอกรหัสผ่าน 7-12 ตัว">
                        </div>
                        <div class="form-group mb-2">
                          <label for="">email</label>
                          <input type="email" name="Email" placeholder="ป้อนอีเมลของคุณ" class="form-control">
                      </div>
                      <div class="form-group mb-2">
                        <label for="">First name</label>
                        <input type="email" name="Fname" placeholder="ป้อนชื่อจริงของคุณ"  class="form-control">
                    </div>
                    <div class="form-group mb-2">
                      <label for="">Last name</label>
                      <input type="email" name="Lname"  placeholder="ป้อนนามสกุลของคุณ" class="form-control">
                  </div>
                  <div class="form-cgroup mb-2">
                    <label for="">Confirm Password</label>
                    <input type="password" name="C_password" class="form-control" placeholder="กรอกรหัสผ่านอีกครั้ง">
                </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger btn-sm" data-bs-dismiss="modal">ยกเลิก</button>
                    <button class="btn btn-success btn-sm">สมัคร</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->

        <!-- start modal-เข้าสู่ระบบ -->
        <div class="modal fade" id="mymodal-2">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">เข้าสู่ระบบ</h5>
                        <button class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body ">
                        <form action="" >
                            <div class="form-group mb-2">
                                <label for="">User</label>
                                <input type="text" name="" id="" placeholder="เสนอหัวข้องานของคุณ" class="form-control">
                            </div>
                            <div class="form-cgroup mb-2">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="กรอกรหัสผ่าน 7-12 ตัว">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger btn-sm" data-bs-dismiss="modal">ยกเลิก</button>
                        <button class="btn btn-success btn-sm">เข้าสู่ระบบ</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal -->
</body>
</html>
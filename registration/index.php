<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- bootstrap css link -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="shortcut icon"
      href="../images/gvt-logo.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="../css/style.css" />
    <title>স্বাস্থ্য ও পরিবার কল্যাণ মন্ত্রণালয়</title>
  </head>
  <body style="background-color: #f2f4f8">
    <!-- header -->
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
          <a class="navbar-brand" style="font-size: 14px" href="#" href="#">
            <img
              class="header-logo"
              src="../images/gvt-logo.png"
              alt=""
              srcset=""
            />
            অনুদান প্রদানের জন্য আহব্বান ব্যবস্থাপনা
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../index.html"
                  >হোম</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../application-rules/index.html"
                  >আবেদনের নিয়মাবলী</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">নীতিমালা</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">লগইন</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./index.php">নিবন্ধন</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">নোটিশ বোর্ড</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  বিবিধ
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">ফর্ম ডাউনলোড</a></li>
                  <li>
                    <a class="dropdown-item" href="#"
                      >অনুদান প্রাপ্তদের তালিকা</a
                    >
                  </li>

                  <li>
                    <a class="dropdown-item" href="#"
                      >অনুদানপ্রাপ্ত প্রকল্পসমূহ</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">English</a>
              </li>
            </ul>
            <!-- <a class="navbar-brand ms-4" href="#">
              <img
                class="header-logo"
                src="./images/digital-bangladesh.jpg"
                alt=""
                srcset=""
              />
            </a> -->
          </div>
        </div>
      </nav>
    </header>
    <!-- main part -->
    <main>
      <!-- registration form -->

      <section class="mt-5 mb-5">
        <div class="container bg-white">
          <div class="alert alert-success d-none" role="alert">
            Successfully submitted.
          </div>
          <form method="POST" action="insert.php">
            <div class="pt-4">
              <h5 class="ms-3">রেজিস্ট্রেশন</h5>
              <hr />
            </div>
            <div class="bg-white p-3">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >আবেদনকারীর নাম *</label
                >
                <input
                  type="text"
                  name="petitionerName"
                  class="form-control name"
                  id="exampleFormControlInput1"
                  placeholder="আপনার নাম লিখুন"
                />
                <div
                  id="validationServerUsernameFeedback"
                  class="name-error-mgs text-danger invalid-feedback"
                >
                  Name should be 3 characters.
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >আবেদনকারীর বাবার নাম *</label
                >
                <input
                  type="text"
                  name="petitionerFatherName"
                  class="form-control father-name"
                  id="exampleFormControlInput1"
                  placeholder="আপনার বাবার নাম লিখুন"
                />
                <div
                  id="validationServerUsernameFeedback"
                  class="fathername-error-mgs text-danger invalid-feedback"
                >
                  Father's name should be 3 characters.
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >আবেদনকারীর মায়ের নাম *</label
                >
                <input
                  type="text"
                  name="petitionerMatherName"
                  class="form-control mother-name"
                  id="exampleFormControlInput1"
                  placeholder="আপনার মায়ের নাম লিখুন"
                />
                <div
                  id="validationServerUsernameFeedback"
                  class="mothername-error-mgs text-danger invalid-feedback"
                >
                  Mothers's name should be 3 characters.
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >আবেদনকারীর ঠিকানা *</label
                >
                <input
                  type="text"
                  name="address"
                  class="form-control address"
                  id="exampleFormControlInput1"
                  placeholder="আপনার ঠিকানা লিখুন"
                />
                <div
                  id="validationServerUsernameFeedback"
                  class="address-error-mgs text-danger invalid-feedback"
                >
                  Please provide a valid address.
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >NID *</label
                >
                <input
                  type="text"
                  name="nid"
                  class="form-control nid"
                  id="exampleFormControlInput1"
                  placeholder="NID"
                />
                <div
                  id="validationServerUsernameFeedback"
                  class="nid-error-mgs text-danger invalid-feedback"
                >
                  Please provide a valid NID number.
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >সংস্থা/প্রতিষ্ঠানের নাম *</label
                >
                <input
                  type="text"
                  name="companyName"
                  class="form-control organization-name"
                  id="exampleFormControlInput1"
                  placeholder="সংস্থা/প্রতিষ্ঠানের নাম লিখুন"
                />
                <div
                  id="validationServerUsernameFeedback"
                  class="organization-name-error-mgs text-danger invalid-feedback"
                >
                  Please provide a valid name of organization.
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >সংস্থা/প্রতিষ্ঠানের ঠিকানা *</label
                >
                <input
                  type="text"
                  name="companyAddress"
                  class="form-control organization-address"
                  id="exampleFormControlInput1"
                  placeholder="সংস্থা/প্রতিষ্ঠানের ঠিকানা লিখুন"
                />
                <div
                  id="validationServerUsernameFeedback"
                  class="organization-address-error-mgs text-danger invalid-feedback"
                >
                  Please provide a valid address of organization.
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >Trade License No. *</label
                >
                <input
                  type="text"
                  name="tradeNo"
                  class="form-control license-no"
                  id="exampleFormControlInput1"
                />
                <div
                  id="validationServerUsernameFeedback"
                  class="license-error-mgs text-danger invalid-feedback"
                >
                  Please provide a valid license number.
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >TIN No. *</label
                >
                <input
                  type="text"
                  name="tin"
                  class="form-control tin-no"
                  id="exampleFormControlInput1"
                />
                <div
                  id="validationServerUsernameFeedback"
                  class="tin-error-mgs text-danger invalid-feedback"
                >
                  Please provide a valid TIN number.
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >সংস্থা/প্রতিষ্ঠানের ব্যাংকের নাম *</label
                >
                <input
                  type="text"
                  class="form-control bank-name"
                  name="bankName"
                  id="exampleFormControlInput1"
                  placeholder="সংস্থা/প্রতিষ্ঠানের ব্যাংকের নাম লিখুন"
                />
                <div
                  id="validationServerUsernameFeedback"
                  class="bank-error-mgs text-danger invalid-feedback"
                >
                  Please provide a valid bank name of organization.
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"
                  >সংস্থা/প্রতিষ্ঠানের আয়ের উৎস *</label
                >
                <input
                  type="text"
                  class="form-control soi"
                  id="exampleFormControlInput1"
                  name="incomeSource"
                  placeholder="সংস্থা/প্রতিষ্ঠানের আয়ের উৎস লিখুন"
                />
                <div
                  id="validationServerUsernameFeedback"
                  class="soi-error-mgs text-danger invalid-feedback"
                >
                  Please provide a valid source of income of organization.
                </div>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"
                  >সংস্থা/প্রতিষ্ঠানের সেবা</label
                >
                <textarea
                  class="form-control service"
                  id="exampleFormControlTextarea1"
                  rows="3"
                  name="service"
                ></textarea>
                <div
                  id="validationServerUsernameFeedback"
                  class="service-error-mgs text-danger invalid-feedback"
                >
                  Please provide a valid service name.
                </div>
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">Attach File</label>
                <input
                  class="form-control"
                  name="file"
                  type="file"
                  id="formFile"
                />
              </div>
              <button
                class="btn btn-primary mb-3"
                id="submit-form"
                style="background-color: #5c6bc0"
                type="submit"
                name="submit"
              >
                একাউন্ট তৈরী করুন
              </button>
              <br />
            </div>
          </form>
        </div>
      </section>
    </main>

    <footer style="background-color: #333; padding: 12px 0">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a
            class="navbar-brand"
            href="#"
            style="color: rgba(255, 255, 255, 0.5); font-size: 16px"
          >
            Rek Technology © ২০২২
          </a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul
              class="navbar-nav me-auto mb-2 mb-lg-0"
              style="color: rgba(255, 255, 255, 0.5)"
            >
              <li class="nav-item">
                <a
                  class="nav-link"
                  style="color: rgba(255, 255, 255, 0.5)"
                  aria-current="page"
                  href="#"
                  >যোগাযোগ</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  style="color: rgba(255, 255, 255, 0.5)"
                  href="#"
                  >অনুদানপ্রাপ্ত প্রকল্পসমূহ</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  style="color: rgba(255, 255, 255, 0.5)"
                  href="#"
                  >সচরাচর জিজ্ঞাস্য প্রশ্নাবলি</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </footer>
    <!-- bootstrap js link -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="../js/script.js"></script>
  </body>
</html>

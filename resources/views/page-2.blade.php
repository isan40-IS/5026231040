<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cek Dong!</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>
  <body>
    <header>
      <img class="border" src="{{ asset('img/Logo CekDong 1.png') }}" alt="Logo Cekdong" />
    </header>
    <main>
      <div class="container-fluid">
        <div class="equipment-title">
          <h3>Equipment</h3>
        </div>
        <p class="equipment-description">
          All list of goods, please tap the goods for start booking
        </p>
      </div>

      <div class="container mt-3">
        <!-- Row 1 -->
        <div class="row g-0">
          <!-- Item 1 -->
          <div class="col-3">
            <div class="item-box">
              <span class="mostly-borrowed" style="visibility: visible"
                >Mostly Borrowed</span
              >
              <div class="content-box">
                <img src="{{ asset('img/1.png') }}" class="item-image" alt="Item" />
                <p class="item-name">Lighting Set Sonny</p>
                <div class="availability">
                  <span></span>
                  <p class="m-0">Available</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="col-3">
            <div class="item-box">
              <span class="mostly-borrowed" style="visibility: hidden"
                >Mostly Borrowed</span
              >
              <div class="content-box">
                <img src="{{ asset('img/2.png') }}" class="item-image" alt="Item" />
                <p class="item-name">Canon Lens EFS 18-135mm</p>
                <div class="availability">
                  <span></span>
                  <p class="m-0">Available</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="col-3">
            <div class="item-box">
              <span class="mostly-borrowed" style="visibility: hidden"
                >Mostly Borrowed</span
              >
              <div class="content-box">
                <img src="{{ asset('img/3.png') }}" class="item-image" alt="Item" />
                <p class="item-name">Sonny PXW-Z90T XDCAM camcoder</p>
                <div class="availability">
                  <span></span>
                  <p class="m-0">Available</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Item 4 -->
          <div class="col-3">
            <div class="item-box">
              <span class="mostly-borrowed" style="visibility: visible"
                >Mostly Borrowed</span
              >
              <div class="content-box">
                <img src="{{ asset('img/4.png') }}" class="item-image" alt="Item" />
                <p class="item-name">Canon EOS 4000</p>
                <div class="availability">
                  <span></span>
                  <p class="m-0">Available</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Row 2 -->
        <div class="row g-0">
          <!-- Item 1 -->
          <div class="col-3">
            <div class="item-box">
              <span class="mostly-borrowed" style="visibility: visible"
                >Mostly Borrowed</span
              >
              <div class="content-box">
                <img src="{{ asset('img/1.png') }}" class="item-image" alt="Item" />
                <p class="item-name">Lighting Set Sonny</p>
                <div class="availability">
                  <span></span>
                  <p class="m-0">Available</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="col-3">
            <div class="item-box">
              <span class="mostly-borrowed" style="visibility: hidden"
                >Mostly Borrowed</span
              >
              <div class="content-box">
                <img src="{{ asset('img/2.png') }}" class="item-image" alt="Item" />
                <p class="item-name">Canon Lens EFS 18-135mm</p>
                <div class="availability">
                  <span></span>
                  <p class="m-0">Available</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="col-3">
            <div class="item-box">
              <span class="mostly-borrowed" style="visibility: hidden"
                >Mostly Borrowed</span
              >
              <div class="content-box">
                <img src="{{ asset('img/3.png') }}" class="item-image" alt="Item" />
                <p class="item-name">Sonny PXW-Z90T XDCAM camcoder</p>
                <div class="availability">
                  <span></span>
                  <p class="m-0">Available</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Item 4 -->
          <div class="col-3">
            <div class="item-box">
              <span class="mostly-borrowed" style="visibility: hidden"
                >Mostly Borrowed</span
              >
              <div class="content-box">
                <img src="{{ asset('img/4.png') }}" class="item-image" alt="Item" />
                <p class="item-name">Canon EOS 4000</p>
                <div class="availability">
                  <span></span>
                  <p class="m-0">Available</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Row 3 -->

        <div class="row g-0">
          <!-- Item 1 -->
          <div class="col-3">
            <div class="item-box">
              <span class="mostly-borrowed" style="visibility: hidden"
                >Mostly Borrowed</span
              >
              <div class="content-box">
                <img src="{{ asset('img/1.png') }}" class="item-image" alt="Item" />
                <p class="item-name">Lighting Set Sonny</p>
                <div class="availability">
                  <span></span>
                  <p class="m-0">Available</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="col-3">
            <div class="item-box">
              <span class="mostly-borrowed" style="visibility: hidden"
                >Mostly Borrowed</span
              >
              <div class="content-box">
                <img src="{{ asset('img/2.png') }}" class="item-image" alt="Item" />
                <p class="item-name">Canon Lens EFS 18-135mm</p>
                <div class="availability">
                  <span></span>
                  <p class="m-0">Available</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="col-3">
            <div class="item-box">
              <span class="mostly-borrowed" style="visibility: hidden"
                >Mostly Borrowed</span
              >
              <div class="content-box">
                <img src="{{ asset('img/3.png') }}" class="item-image" alt="Item" />
                <p class="item-name">Sonny PXW-Z90T XDCAM camcoder</p>
                <div class="availability">
                  <span></span>
                  <p class="m-0">Available</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Item 4 -->
          <div class="col-3">
            <div class="item-box">
              <span class="mostly-borrowed" style="visibility: hidden"
                >Mostly Borrowed</span
              >
              <div class="content-box">
                <img src="{{ asset('img/4.png') }}" class="item-image" alt="Item" />
                <p class="item-name">Canon EOS 4000</p>
                <div class="availability">
                  <span></span>
                  <p class="m-0">Available</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Row 4 -->
        <div class="row g-0">
          <!-- Item 1 -->
          <div class="col-3">
            <div class="item-box">
              <span class="mostly-borrowed" style="visibility: hidden"
                >Mostly Borrowed</span
              >
              <div class="content-box">
                <img src="{{ asset('img/1.png') }}" class="item-image" alt="Item" />
                <p class="item-name">Lighting Set Sonny</p>
                <div class="availability">
                  <span></span>
                  <p class="m-0">Available</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="col-3">
            <div class="item-box">
              <span class="mostly-borrowed" style="visibility: visible"
                >Mostly Borrowed</span
              >
              <div class="content-box">
                <img src="{{ asset('img/2.png') }}" class="item-image" alt="Item" />
                <p class="item-name">Canon Lens EFS 18-135mm</p>
                <div class="availability">
                  <span></span>
                  <p class="m-0">Available</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="col-3">
            <div class="item-box">
              <span class="mostly-borrowed" style="visibility: hidden"
                >Mostly Borrowed</span
              >
              <div class="content-box">
                <img src="{{ asset('img/3.png') }}" class="item-image" alt="Item" />
                <p class="item-name">Sonny PXW-Z90T XDCAM camcoder</p>
                <div class="availability">
                  <span></span>
                  <p class="m-0">Available</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <div class="button-container">
      <button class="btn-custom">Book Now!</button>
    </div>

    <footer>
      <div class="footer-item">
        <i class="fa-solid fa-user"></i>
        <p>Profile</p>
      </div>
      <div class="footer-item">
        <i class="fa-solid fa-bars"></i>
        <p>Menu</p>
      </div>
      <div class="footer-item">
        <i class="fa-solid fa-clock-rotate-left"></i>
        <p>Riwayat</p>
      </div>
      <div class="footer-item active">
        <i class="fa-solid fa-toolbox"></i>
        <p>Equipment</p>
      </div>
    </footer>
  </body>
</html>

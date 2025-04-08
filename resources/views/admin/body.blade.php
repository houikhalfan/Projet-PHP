<style>
  h2 {
  font-size: 28px !important;
  font-weight: 700 !important;
  color: #ffffff !important;
  text-shadow: 0 0 8px rgba(255, 255, 255, 0.2) !important;
  margin-bottom: 20px !important;
  letter-spacing: 1px !important;
  backdrop-filter: blur(2px);
}
/* h1 Header */
h1 {
  font-size: 32px;
  font-weight: 700;
  color: #ffffff;
  text-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
  margin-bottom: 25px;
  letter-spacing: 1px;
}

  .statistic-block.block {
  background-color: rgba(110, 231, 183, 0.2) !important;
  color: #f5f5f5 !important;
  border-radius: 8px !important;
  padding: 20px !important;
  box-shadow: 0 4px 8px rgba(255, 255, 255, 0.1)!important;
}

.statistic-block .title strong,
.statistic-block .number,
.statistic-block .icon i {
  color: #f5f5f5 !important;
}

</style>
<h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
        <section class="no-padding-top no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-user-1"></i></div><strong>Clients</strong>
                    </div>
                    <div class="number dashtext-1">{{$user}}</div>
                  </div>
                  
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-contract"></i></div><strong>Products</strong>
                    </div>
                    <div class="number dashtext-2">{{$product}}</div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>Orders</strong>
                    </div>
                    <div class="number dashtext-3">{{$order}}</div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>Delivered orders</strong>
                    </div>
                    <div class="number dashtext-4">{{$delivered}}</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
       
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
               <p class="no-margin-bottom">2018 &copy; Your company. Download From <a target="_blank" href="https://templateshub.net">Templates Hub</a>.</p>
            </div>
          </div>
        </footer>
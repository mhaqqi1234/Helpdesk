@extends('layout.app')
@section('content')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<!-- Features Section -->
  <style>
    .feature-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .feature-card:hover {
        transform: scale(1.05) rotateX(2deg);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
        z-index: 2;
    }
</style>

<!-- Hero Section -->
<section class="text-white pt-4 position-relative" id="home" style="background: url('hangnadim2.jpg') no-repeat center center; background-size: cover;">

    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
                background-color: rgba(0, 0, 0, 0.541); z-index: 1;"></div>
    
    <!-- Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(63, 63, 63, 0.422); z-index: 1;"></div>

    <!-- Isi Konten -->
    <div class="container pt-4 mt-4 position-relative" style="z-index: 2; font-family:Segoe UI', sans-serif">
        <div class="row align-items-center py-5">
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold mb-4">{{ __('messages.solution') }}</h1>
                <p class="lead mb-5">
                    {{ __('messages.opening') }}<br>
                    {{ __('messages.experience') }}
                </p>
        
                <div class="d-flex gap-2 flex-wrap">
                    <a href="#komplain" class="btn btn-outline-light btn-lg mb-2 rounded-pill">{{ __('messages.complaint') }}</a>
                    <a href="#saran" class="btn btn-outline-light btn-lg mb-2 rounded-pill">{{ __('messages.suggestion') }}</a>
                </div>
            
            </div>  
        </div>
    </div>

    <div class="bg-white text-primary py-5 position-relative shadow-sm" style="z-index: 5; font-family:Segoe UI', sans-serif">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="fw-bold text-primary-emphasis">2K+</h2>
                    <p class="text-muted">{{ __('messages.resolved') }}</p>
                </div>
                <div class="col-md-4">
                    <h2 class="fw-bold text-primary-emphasis">98%</h2>
                    <p class="text-muted">{{ __('messages.completion')}}</p>
                </div>
                <div class="col-md-4">
                    <h2 class="fw-bold text-primary-emphasis">{{ __('messages.hours') }}</h2>
                    <p class="text-muted">{{ __('messages.responses') }}</p>
                </div>
            </div>
        </div>
    </div>

</section>

  <section class="bg-light py-1" id="features">
      <div class="container py-5" style="font-family:Segoe UI', sans-serif;">
          <div class="text-center mb-5">
              <h2 class="fw-bold mb-4">{{ __('messages.track') }}</h2>
              <p class="lead text-muted">{{ __('messages.monitor') }}</p>
          </div>
          <div class="row g-4">
              <div class="col-md-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                <div class="card feature-card border-0 shadow-sm h-100 text-center p-4">
                    <div class="card-body">
                          <div class="bg-primary bg-gradient text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                              <i class="fas fa-file-alt fa-2x"></i>
                          </div>
                          <h5 class="card-title fw-bold">{{ __('messages.regis') }}</h5>
                          <p class="card-text text-muted">{{ __('messages.register') }}</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <div class="card feature-card border-0 shadow-sm h-100 text-center p-4">
                    <div class="card-body">
                          <div class="bg-primary bg-gradient text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                              <i class="fas fa-search fa-2x"></i>
                          </div>
                          <h5 class="card-title fw-bold">{{ __('messages.process') }}</h5>
                          <p class="card-text text-muted">{{ __('messages.monitor_card') }}</p>
                      </div>
                  </div>
              </div>
              <div class="col-md-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="500">
                <div class="card feature-card border-0 shadow-sm h-100 text-center p-4">
                    <div class="card-body">
                          <div class="bg-primary bg-gradient text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                              <i class="fas fa-check-circle fa-2x"></i>
                          </div>
                          <h5 class="card-title fw-bold">{{ __('messages.complet') }}</h5>
                          <p class="card-text text-muted">{{ __('messages.problem') }}</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

<!-- Options Section -->
<section class="py-1" id="options" style="font-family: 'Segoe UI', sans-serif;">
        <div class="text-center mb-4">
            <h2 class="fw-bold mb-3">{{ __('messages.submit_home') }}</h2>
            <p class="lead text-muted">{{ __('messages.appreciate') }}</p>
        </div>
        <section class="mb-5">
        <div class="container px-1">
            <div class="row g-4">
            <!-- Komplain Card -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <div class="card feature-card h-100 border-0 shadow-sm">
                    <div id="komplain" class="card-body p-5 shadow-sm d-flex flex-column">
                        <div class="text-center mb-4">
                            <div class="bg-primary bg-gradient text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                <i class="fas fa-thumbs-up fa-2x"></i>
                            </div>
                            <h3 class="fw-bold">{{ __('messages.complain') }}</h3>
                            <p class="text-muted">{{ __('messages.give') }}</p>
                        </div>
                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item border-0 ps-0"><i class="fas fa-check text-primary me-2"></i> {{ __('messages.respon') }}</li>
                            <li class="list-group-item border-0 ps-0"><i class="fas fa-check text-primary me-2"></i> {{ __('messages.effective') }}</li>
                            <li class="list-group-item border-0 ps-0"><i class="fas fa-check text-primary me-2"></i> {{ __('messages.communication') }}</li>
                            <li class="list-group-item border-0 ps-0"><i class="fas fa-check text-primary me-2"></i> {{ __('messages.satisfactory') }}</li>
                        </ul>
                        <div class="mt-auto text-center">
                            <a href="{{ route('komplain.form') }}" class="btn btn-primary btn-lg w-100 rounded-pill text-white btn-hover">{{ __('messages.complaint') }}</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Saran Card -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                <div class="card feature-card h-100 border-0 shadow-sm">
                    <div id="saran" class="card-body p-5 shadow-sm d-flex flex-column">
                        <div class="text-center mb-4">
                            <div class="bg-primary bg-gradient text-white rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                                <i class="fas fa-comments fa-2x"></i>
                            </div>
                            <h3 class="fw-bold">{{ __('messages.have') }}</h3>
                            <p class="text-muted">{{ __('messages.share') }}</p>
                        </div>
                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item border-0 ps-0"><i class="fas fa-check text-primary me-2"></i> {{ __('messages.fiture') }}</li>
                            <li class="list-group-item border-0 ps-0"><i class="fas fa-check text-primary me-2"></i> {{ __('messages.system') }}</li>
                            <li class="list-group-item border-0 ps-0"><i class="fas fa-check text-primary me-2"></i> {{ __('messages.feedback') }}</li>
                            <li class="list-group-item border-0 ps-0"><i class="fas fa-check text-primary me-2"></i> {{ __('messages.idea') }}</li>
                        </ul>
                        <div class="mt-auto text-center">
                            <a href="{{ route('saran.form') }}" class="btn btn-primary btn-lg w-100 rounded-pill text-white btn-hover">{{ __('messages.suggestion')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
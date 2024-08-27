@extends('/admin/dashboard')
@section('content')

<style>
  .card-custom {
    display: flex;
    align-items: center;
    height: 120px;
    background-color: #e9ecef;
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
    text-align: left;
    margin: 10px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    padding: 10px;
  }

  .icon-container {
    background-color: #002c77;
    color: #fff;
    width: 80px;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius:10%;
    margin-right: 15px;
    padding: 12px;
  }

  .stat-text {
    font-size: 1.2rem;
    font-weight: bold;
  }
</style>

<div class="container "  >
  <div class="card rounded-3 shadow-sm " style="min-height: 80vh" >
      <div class="card-body mx-4 my-2">
      <h4>Statistik Dashboard</h4>
        <div class="row">
          <div class="col-md-4">
            <div class="card-custom">
              <div class="icon-container">
                <img src="/img/news.svg" alt="Logo" class="dashboard-logo" height="100">
              </div>
              <div>
                <div class="stat-text">Berita</div>
                <div>{{ count($berita) }}</div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-custom">
              <div class="icon-container">
                <img src="/img/activity.svg" alt="Logo" class="dashboard-logo" height="100">
              </div>
              <div>
                <div class="stat-text">Kegiatan</div>
                <div>{{ count($kegiatan) }}</div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

@endsection

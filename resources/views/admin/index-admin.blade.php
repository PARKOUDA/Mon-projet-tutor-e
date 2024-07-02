@extends("admin.layouts.app")

@section("titre", "Admin tableau de bord")

@section("contenu")
    <!-- la partie de bienvenue -->
    <div class="main-panel">
        <div class="content-wrapper">
          @if (session('success'))
            <div class="alert alert-success">{{session('success')}} </div>
          @endif
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="me-md-3 me-xl-5">
                    <h2>Bienvenue ADMINISTRATEUR</h2>
                    <p class="mb-md-0">dans votre tableau de bord</p>
                  </div>

                  <div class="d-flex">
                    <i class="mdi mdi-home text-muted hover-cursor"></i>
                    <p class="text-muted mb-0 hover-cursor">
                      &nbsp;/&nbsp;Tableau de bord&nbsp;
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          {{-- <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="me-md-3 me-xl-5">
                            <h2>Mon profil ENSEIGNANT</h2>
                        </div>
                        <div class="d-flex">
                            <i class="mdi mdi-home text-muted hover-cursor"></i>
                            <p class="text-muted mb-0 hover-cursor">
                                &nbsp;/&nbsp;-&nbsp;
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

          <!-- fin de bienvenue -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Total des enseignants</h4>
                  {{ $totalEnseignant }} 
                  <p class="card-description">
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Total des titres</h4>
                  {{ $totalTitre }} 
                  <p class="card-description">
                  </p>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Total des grades</h4>
                  {{ $totalGrade }}  
                  <p class="card-description">
                  </p>
                  
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Total des fonctions</h4>
                  {{ $totalFonction }} 
                  <p class="card-description">
                  </p>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Total des ufrs</h4>
                  {{ $totalUfr }} 
                  <p class="card-description">
                  </p>
                  
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Total des departements</h4>
                  {{ $totalDepartement }} 
                  <p class="card-description">
                  </p>
                  
                </div>
              </div>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Total des atos</h4>
                  {{ $totalAtos }} 
                  <p class="card-description">
                  </p>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Total des directions/services</h4>
                  {{ $totalStructure }} 
                  <p class="card-description">
                  </p>
                  
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Total des emplois</h4>
                  {{ $totalEmploi }} 
                  <p class="card-description">
                  </p>
                  
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Total des fonctions</h4>
                  {{ $totalFao }} 
                  <p class="card-description">
                  </p>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div
            class="d-sm-flex justify-content-center justify-content-sm-between"
          >
            <span
              class="text-muted text-center text-sm-left d-block d-sm-inline-block"
              >2024 © Université Norbert ZONGO </span
            >
            <span
              class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"
              >Gestion du personnel UNZ</span
            >
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
@endsection
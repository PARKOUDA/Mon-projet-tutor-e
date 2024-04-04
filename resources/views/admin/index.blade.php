@extends("admin.layouts.app")

@section("titre", "Tableau de bord")

@section("contenu")
    <!-- la partie de bienvenue -->

    <div class="main-panel">
        <div class="content-wrapper">
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

          <!-- fin de bienvenue -->

          <!-- évènement récent -->
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Gestion du personnels</p>
                  <div class="table-responsive">
                    <table id="recent-purchases-listing" class="table">
                      <thead>
                        <tr>
                          <th>Matricule</th>
                          <th>Nom & Prénom</th>
                          <th>Fonction</th>
                          <th>Poste</th>
                          <th>Email</th>
                          <th>Telephone</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $user)
                          <tr>
                            <td> {{ $user->Matricule }} </td>
                            <td> {{ $user->NomComplet }}</td>
                            <td> {{ $user->Fonction }}</td>
                            <td> {{ $user->Poste }}</td>
                            <td> {{ $user->Telephone }}</td>
                            <td> {{ $user->email }}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
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
              >Copyright © UNIVERSITE NORBERT ZONGO 2024</span
            >
            <span
              class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"
              >BASE DE DONNEES DU PERSONNELS</span
            >
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
@endsection
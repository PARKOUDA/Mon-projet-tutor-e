<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\ProfilController;
use App\Http\Controllers\admin\ServicesController;
use App\Http\Controllers\auth\ConnexionController;
use App\Http\Controllers\admin\PersonnelsController;
use App\Http\Controllers\auth\AdminController;
use App\Http\Controllers\auth\UserController;
use App\Http\Controllers\public\AuthPublicController;
use App\Http\Controllers\public\PublicController;

//Authentification 
Route::get('/inscription/user', [UserController::class, 'inscriptionUser'])->name('inscription-user');
Route::post('/inscription/user/action', [UserController::class, 'inscriptionUserAction'])->name('inscription-user-action');
Route::get('/connexion/admin', [UserController::class, 'connexionAdmin'])->name('connexion-user');
Route::post('/connexion/user/action', [UserController::class, 'connexionAdminAction'])->name('connexion-user-action');
Route::post('/deconnexion',[UserController::class, 'deconnexion'])->name('deconnexion');

#Public route
Route::get('/',[PublicController::class, 'pageDaccueil'])->name('accueil');
Route::get('/liste-des-enseignants',[PublicController::class, 'enseignantListe'])->name('liste-enseignant');
Route::get('/liste-des-atos',[PublicController::class, 'atosListe'])->name('liste-atos');

Route::get('/inscription-option',[PublicController::class, 'inscriptionOption'])->name('inscription-option');
Route::get('/connexion-option',[PublicController::class, 'connexionOption'])->name('connexion-option');

Route::get('/inscription-enseignant',[AuthPublicController::class, 'inscriptionEnseignant'])->name('inscription-enseignant');
Route::post('/inscription-enseignant-action',[AuthPublicController::class, 'inscriptionEnseignantAction'])->name('inscription-enseignant-action');
Route::get('/connexion-enseignant',[AuthPublicController::class, 'connexionEnseignant'])->name('connexion-enseignant');
Route::post('/connexion-enseignant-option',[AuthPublicController::class, 'connexionEnseignantAction'])->name('connexion-enseignant-action');

Route::get('/inscription-atos',[AuthPublicController::class, 'inscriptionAtos'])->name('inscription-atos');
Route::post('/inscription-atos-action',[AuthPublicController::class, 'inscriptionAtosAction'])->name('inscription-atos-action');
Route::get('/connexion-atos',[AuthPublicController::class, 'connexionAtos'])->name('connexion-atos');
Route::post('/connexion-atos-option',[AuthPublicController::class, 'connexionAtosAction'])->name('connexion-atos-action');
Route::get('/get-departements/{ufr_id}', [AuthPublicController::class, 'getDepartements']);

// Route::get('/inscription-user', [UserController::class, 'inscription'])->name('inscription-admin');
// Route::post('/inscription-user/action', [UserController::class, 'inscriptionAction'])->name('inscription-admin-action');


// Route::middleware(['auth'])->group(function () {
    

    Route::get('/admin', [PersonnelsController::class, 'index'])->name('admin.index');
    Route::get('/user', [PersonnelsController::class, 'indexUser'])->name('user.index');
    
    Route::post('/deconnexion',[AuthPublicController::class, 'deconnexion'])->name('deconnexion');

    
    // Route du personnels
    Route::get('/admin/personnels', [PersonnelsController::class, 'personnels'])->name('admin.listes.personnels');
    
    // Route de l'ajout d'un personnel
    Route::get('/admin/personnels/ajout', [PersonnelsController::class, 'ajoutPersonnel'])->name('admin.listes.ajout-personnels');
    
    // Route de formulaire pour l'ajout d'un enseignant
    Route::get('/admin/personnels/ajout/enseignant', [PersonnelsController::class, 'ajoutEnseignant'])->name('admin.listes.ajout-enseignant');
    Route::post('/admin/personnels/ajout/enseignant', [PersonnelsController::class, 'sauvegardeEnseignant']);
    Route::get('/admin/personnels/ajout/enseignant/{enseignant}/modifier', [PersonnelsController::class, 'modifieEnseignant'])->name('admin.enseignant.modifier');
    Route::put('/admin/personnels/enseignant/{enseignant}/modifier', [PersonnelsController::class, 'modifSauveEnseignant'])->name('admin.enseignant.sauvegarde-enseignant');
    Route::delete('/admin/personnels/enseignant/{enseignant}', [PersonnelsController::class, 'supprimerEnseignant'])->name('admin.enseignant.supprimer');
    
    // Route de formulaire pour l'ajout d'un atos
    Route::get('/admin/personnels/ajout/atos', [PersonnelsController::class, 'ajoutAtos'])->name('admin.listes.ajout-atos');
    Route::post('/admin/personnels/ajout/atos', [PersonnelsController::class, 'sauvegardeAtos']);
    Route::get('/admin/personnels/ajout/atos/{atos}/modifier', [PersonnelsController::class, 'modifieAtos'])->name('admin.atos.modifier');
    Route::put('/admin/personnels/atos/{atos}/modifier', [PersonnelsController::class, 'modifSauveAtos'])->name('admin.atos.sauvegarde-atos');
    Route::delete('/admin/personnels/atos/{atos}', [PersonnelsController::class, 'supprimerAtos'])->name('admin.atos.supprimer');
    
    //les routes des differents services
    Route::get('/admin/departements', [ServicesController::class, 'departement'])->name('admin.services.departements');
    Route::post('/admin/departements', [ServicesController::class, 'sauvegardeDepartement']);
    Route::get('/admin/departements/{departement}/modifier', [ServicesController::class, 'modifierDepartement'])->name('admin.departements.modifier');
    Route::put('/admin/departements/{departement}', [ServicesController::class, 'modifSauveDepart'])->name('admin.departements.modifier-sauvegarde');
    Route::delete('/admin/departements/{departement}', [ServicesController::class, 'supprimerDepartement'])->name('admin.departements.supprimer');
    
    Route::get('/admin/emplois', [ServicesController::class, 'emploi'])->name('admin.services.emplois');
    Route::post('/admin/emplois', [ServicesController::class, 'sauvegardeEmploi']);
    Route::get('/admin/emplois/{emploi}/modifier', [ServicesController::class, 'modifierEmploi'])->name('admin.emploi.modifier');
    Route::put('/admin/emplois/{emploi}', [ServicesController::class, 'modifSauveEmploi'])->name('admin.emploi.modifier-sauvegarde');
    Route::delete('/admin/emplois/{emploi}', [ServicesController::class, 'supprimerEmploi'])->name('admin.emploi.supprimer');
    
    Route::get('/admin/faos', [ServicesController::class, 'fao'])->name('admin.services.faos');
    Route::post('/admin/faos', [ServicesController::class, 'sauvegardeFao']);
    Route::get('/admin/faos/{fao}/modifier', [ServicesController::class, 'modifierFao'])->name('admin.fao.modifier');
    Route::put('/admin/faos/{fao}', [ServicesController::class, 'modifSauveFao'])->name('admin.fao.modifier-sauvegarde');
    Route::delete('/admin/faos/{fao}', [ServicesController::class, 'supprimerFao'])->name('admin.fao.supprimer');
    
    Route::get('/admin/fonctions', [ServicesController::class, 'fonction'])->name('admin.services.fonctions');
    Route::post('/admin/fonctions', [ServicesController::class, 'sauvegardeFonction']);
    Route::get('/admin/fonctions/{fonction}/modifier', [ServicesController::class, 'modifierFonction'])->name('admin.fonction.modifier');
    Route::put('/admin/fonctions/{fonction}', [ServicesController::class, 'modifSauveFonction'])->name('admin.fonction.modifier-sauvegarde');
    Route::delete('/admin/fonctions/{fonction}', [ServicesController::class, 'supprimerFonction'])->name('admin.fonction.supprimer');
    
    Route::get('/admin/grades', [ServicesController::class, 'grade'])->name('admin.services.grades');
    Route::post('/admin/grades', [ServicesController::class, 'sauvegardeGrade']);
    Route::get('/admin/grades/{grade}/modifier', [ServicesController::class, 'modifierGrade'])->name('admin.grade.modifier');
    Route::put('/admin/grades/{emploi}', [ServicesController::class, 'modifSauveGrade'])->name('admin.grade.modifier-sauvegarde');
    Route::delete('/admin/grades/{grade}', [ServicesController::class, 'supprimerGrade'])->name('admin.grade.supprimer');
    
    Route::get('/admin/structures', [ServicesController::class, 'structure'])->name('admin.services.structures');
    Route::post('/admin/structures', [ServicesController::class, 'sauvegardeStructure']);
    Route::get('/admin/structures/{structure}/modifier', [ServicesController::class, 'modifierStructure'])->name('admin.structure.modifier');
    Route::put('/admin/structures/{structure}', [ServicesController::class, 'modifSauveStructure'])->name('admin.structure.modifier-sauvegarde');
    Route::delete('/admin/structures/{structure}', [ServicesController::class, 'supprimerStructure'])->name('admin.structure.supprimer');
    
    Route::get('/admin/titres', [ServicesController::class, 'titre'])->name('admin.services.titres');
    Route::post('/admin/titres', [ServicesController::class, 'sauvegardeTitre']);
    Route::get('/admin/titres/{titre}/modifier', [ServicesController::class, 'modifierTitre'])->name('admin.titre.modifier');
    Route::put('/admin/titres/{titre}', [ServicesController::class, 'modifSauveTitre'])->name('admin.titre.modifier-sauvegarde');
    Route::delete('/admin/titres/{titre}', [ServicesController::class, 'supprimerTitre'])->name('admin.titre.supprimer');
    
    Route::get('/admin/ufrs', [ServicesController::class, 'ufr'])->name('admin.services.ufrs');
    Route::post('/admin/ufrs', [ServicesController::class, 'sauvegardeUfr']);
    Route::get('/admin/ufrs/{ufr}/modifier', [ServicesController::class, 'modifierUfr'])->name('admin.ufr.modifier');
    Route::put('/admin/ufrs/{ufr}', [ServicesController::class, 'modifSauveUfr'])->name('admin.ufr.modifier-sauvegarde');
    Route::delete('/admin/ufrs/{ufr}', [ServicesController::class, 'supprimerUfr'])->name('admin.ufr.supprimer');
    
    Route::get('/connexion/enseignant', [ConnexionController::class, 'connexionEnseignant'])->name('auth.connexion.enseignant');
    // Route::post('/connexion/enseignant', [ConnexionController::class, 'verifieEnseignant']);
    
    
    
    Route::get('/connexion/atos', [ConnexionController::class, 'connexionAtos']);
    
    Route::get('/admin/profil', [PersonnelsController::class, 'profil'])->name('admin.personnel.profil');
    Route::get('/enseignant/profil', [PersonnelsController::class, 'profilEnseignant'])->name('enseignant.profil');
    Route::post('/enseignant/profil/action', [PersonnelsController::class, 'profilEnseignantAction'])->name('enseignant.profil.action');
    Route::get('/atos/profil', [PersonnelsController::class, 'profilAtos'])->name('atos.profil');
    Route::post('/atos/profil/action', [PersonnelsController::class, 'profilAtosAction'])->name('atos.profil.action');
    
   
// });

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServicesRequest;
use App\Models\Departement;
use App\Models\Emploi;
use App\Models\Fao;
use App\Models\Fonction;
use App\Models\Grade;
use App\Models\Structure;
use App\Models\Titre;
use App\Models\Ufr;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function departement(Request $request){
        $departements = Departement::query();
        if ($recherche = $request->RechercheDepartement) {
            $departements->where('Nom', 'like', '%' . $recherche . '%');
        }

        // Ajoutez orderBy() pour trier par ordre alphabétique du champ 'Nom'
        $departements->orderBy('Nom');
        return view('admin.services.departements',[
            'departements' => $departements->get()
        ]);
    }

    public function sauvegardeDepartement(Request $request) {
        $departement = Departement::create([
            'Nom' => $request->input('Nom')
        ]);
        return redirect()->route('admin.services.departements')->with('success', 'Département ajouter avec succès');
    }

    public function modifierDepartement(Departement $departement) {
        return view('admin.services.modifie-departement', [
            'departement' => $departement
        ]);
    }

    public function modifSauveDepart(ServicesRequest $request, Departement $departement) {
        $departement->update($request->validated());
        return to_route('admin.services.departements')->with('success', 'Le département a bien été modifier');
    }

    public function supprimerDepartement(Departement $departement) {
        $departement->delete();
        return to_route('admin.services.departements')->with('success', 'Le département a bien été supprimé');
    }

    public function emploi(Request $request){
        $emplois = Emploi::query();
        if ($recherche = $request->RechercheEmploi) {
            $emplois->where('Nom', 'like', '%' . $recherche . '%');
        }
        return view('admin.services.emplois',[
            'emplois' => $emplois->get()
        ]);
    }

    public function sauvegardeEmploi(Request $request) {
        $emploi = Emploi::create([
            'Nom' => $request->input('Nom')
        ]);
        return redirect()->route('admin.services.emplois')->with('success', 'Emploi ajouter avec succès');
    }

    public function modifierEmploi(Emploi $emploi) {
        return view('admin.services.modifie-emplois', [
            'emploi' => $emploi
        ]);
    }

    public function modifSauveEmploi(ServicesRequest $request, Emploi $emploi) {
        $emploi->update($request->validated());
        return to_route('admin.services.emplois')->with('success', 'L\'emploi a bien été modifier');
    }

    public function supprimerEmploi(Emploi $emploi) {
        $emploi->delete();
        return to_route('admin.services.emplois')->with('success', 'L\'emploi a bien été supprimé');
    }

    public function fao(Request $request){
        $faos = Fao::query();
        if ($recherche = $request->RechercheFao) {
            $faos->where('Nom', 'like', '%' . $recherche . '%');
        }
        return view('admin.services.faos',[
            'faos' => $faos->get()
        ]);
    }

    public function sauvegardeFao(Request $request) {
        $emploi = Fao::create([
            'Nom' => $request->input('Nom')
        ]);
        return redirect()->route('admin.services.faos')->with('success', 'Fonction administrative occupée ajouter avec succès');
    }

    public function modifierFao(Fao $fao) {
        return view('admin.services.modifie-faos', [
            'fao' => $fao
        ]);
    }

    public function modifSauveFao(ServicesRequest $request, Fao $fao) {
        $fao->update($request->validated());
        return to_route('admin.services.faos')->with('success', 'La fonction administrative a bien été modifier');
    }

    public function supprimerFao(Fao $fao) {
        $fao->delete();
        return to_route('admin.services.faos')->with('success', 'La fonction administrative a bien été supprimé');
    }

    public function fonction(Request $request){
        $fonctions = Fonction::query();
        if ($recherche = $request->RechercheFonction) {
            $fonctions->where('Nom', 'like', '%' . $recherche . '%');
        }
        return view('admin.services.fonctions',[
            'fonctions' => $fonctions->get()
        ]);
    }

    public function sauvegardeFonction(Request $request) {
        $emploi = Fonction::create([
            'Nom' => $request->input('Nom')
        ]);
        return redirect()->route('admin.services.fonctions')->with('success', 'Fonction ajouter avec succès');
    }

    public function modifierFonction(Fonction $fonction) {
        return view('admin.services.modifie-fonctions', [
            'fonction' => $fonction
        ]);
    }

    public function modifSauveFonction(ServicesRequest $request, Fonction $fonction) {
        $fonction->update($request->validated());
        return to_route('admin.services.fonctions')->with('success', 'La fonction a bien été modifier');
    }

    public function supprimerFonction(Fonction $fonction) {
        $fonction->delete();
        return to_route('admin.services.fonctions')->with('success', 'La fonction a bien été supprimé');
    }

    public function grade(Request $request){
        $grades = Grade::query();
        if ($recherche = $request->RechercheGrade) {
            $grades->where('Nom', 'like', '%' . $recherche . '%');
        }
        return view('admin.services.grades',[
            'grades' => $grades->get()
        ]);
    }

    public function sauvegardeGrade(Request $request) {
        $emploi = Grade::create([
            'Nom' => $request->input('Nom')
        ]);
        return redirect()->route('admin.services.grades')->with('success', 'Grade ajouter avec succès');
    }

    public function modifierGrade(Grade $grade) {
        return view('admin.services.modifie-grades', [
            'grade' => $grade
        ]);
    }

    public function modifSauveGrade(ServicesRequest $request, Grade $grade) {
        $grade->update($request->validated());
        return to_route('admin.services.grades')->with('success', 'Le grade a bien été modifier');
    }

    public function supprimerGrade(Grade $grade) {
        $grade->delete();
        return to_route('admin.services.grades')->with('success', 'Le grade a bien été supprimé');
    }

    public function structure(Request $request){
        $structures = Structure::query();
        if ($recherche = $request->RechercheStructure) {
            $structures->where('Nom', 'like', '%' . $recherche . '%');
        }
        return view('admin.services.structures',[
            'structures' => $structures->get()
        ]);
    }

    public function sauvegardeStructure(Request $request) {
        $emploi = Structure::create([
            'Nom' => $request->input('Nom')
        ]);
        return redirect()->route('admin.services.structures')->with('success', 'structure ajouter avec succès');
    }

    public function modifierStructure(Structure $structure) {
        return view('admin.services.modifie-structures', [
            'structure' => $structure
        ]);
    }

    public function modifSauveStructure(ServicesRequest $request, Structure $structure) {
        $structure->update($request->validated());
        return to_route('admin.services.structures')->with('success', 'La structure a bien été modifier');
    }

    public function supprimerStructure(Structure $structure) {
        $structure->delete();
        return to_route('admin.services.structures')->with('success', 'La structure a bien été supprimé');
    }

    public function titre(Request $request){
        $titres = Titre::query();
        if ($recherche = $request->RechercheTitre) {
            $titres->where('Nom', 'like', '%' . $recherche . '%');
        }
        return view('admin.services.titres',[
            'titres' => $titres->get()
        ]);
    }

    public function sauvegardeTitre(Request $request) {
        $emploi = Titre::create([
            'Nom' => $request->input('Nom')
        ]);
        return redirect()->route('admin.services.titres')->with('success', 'titres ajouter avec succès');
    }

    public function modifierTitre(Titre $titre) {
        return view('admin.services.modifie-titres', [
            'titre' => $titre
        ]);
    }

    public function modifSauveTitre(ServicesRequest $request, Titre $titre) {
        $titre->update($request->validated());
        return to_route('admin.services.titres')->with('success', 'Le titre a bien été modifier');
    }

    public function supprimerTitre(Titre $titre) {
        $titre->delete();
        return to_route('admin.services.titres')->with('success', 'Le titre a bien été supprimé');
    }

    public function ufr(Request $request){
        $ufrs = Ufr::query();
        if ($recherche = $request->RechercheUfr) {
            $ufrs->where('Nom', 'like', '%' . $recherche . '%');
        }
        return view('admin.services.ufrs',[
            'ufrs' => $ufrs->get()
        ]);
    }

    public function sauvegardeUfr(Request $request) {
        $emploi = Ufr::create([
            'Nom' => $request->input('Nom')
        ]);
        return redirect()->route('admin.services.ufrs')->with('success', 'Ufr ajouter avec succès');
    }

    public function modifierUfr(Ufr $ufr) {
        return view('admin.services.modifie-ufrs', [
            'ufr' => $ufr
        ]);
    }

    public function modifSauveUfr(ServicesRequest $request, Ufr $ufr) {
        $ufr->update($request->validated());
        return to_route('admin.services.ufrs')->with('success', 'L\'ufr a bien été modifier');
    }

    public function supprimerUfr(Ufr $ufr) {
        $ufr->delete();
        return to_route('admin.services.ufrs')->with('success', 'L\'ufr a bien été supprimé');
    }
}

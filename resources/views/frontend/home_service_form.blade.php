@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <!--<< Mouse Cursor Start >>-->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>


    <div class="container my-4">
        <div class="row">
          <div class="col-md-8 mx-auto">
             <h2>Détails du service  </h2>
             <form>
              <label>Votre nom</label>
              <input type="type" class="form-control mb-3"/>
              <label>Nom de l'entreprise</label>
              <input type="type" class="form-control mb-3"/>
              <label>Adresse email</label>
              <input type="type" class="form-control mb-3"/>
              <label>Numéro de téléphone</label>
              <input type="type" class="form-control mb-3"/>
              <label>Êtes-vous indépendant?</label><br/>
              <button type="button" class="btn btn-light btn-sm">Yes</button>
               <button type="button" class="btn btn-light btn-sm">No</button><br/>
               <label>Possédez-vous une agence ?</label><br/>
              <button type="button" class="btn btn-light btn-sm">Yes</button>
               <button type="button" class="btn btn-light btn-sm">No</button><br/>
               <label>Votre entreprise possède-t-elle un site Internet ?</label><br/>
               <button type="button" class="btn btn-light btn-sm">Yes</button>
                <button type="button" class="btn btn-light btn-sm">No</button><br/>
                <label>Taille de l'entreprise, effectif</label><br/>
                <input type="type" class=" me-2"/>
                <button type="button" class="btn btn-light btn-sm">2-10</button>
                 <button type="button" class="btn btn-light btn-sm">11-50</button><br/>

                 <button class="my-2 p-2 text-white" style="background-color: #0d75bc;"> SOUMET</button>
             </form>

          </div>
        </div>
    </div>


    <!--<< Footer Section Start >>-->

    </body>
   

    </html>
@endsection

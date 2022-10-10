@extends("template") 

@section("title", "Ma Todo List") 

<br>
<br>
<br>
<br>

@section("content")

<div class="container">

  <div class="card">
    <div class="card-body">

      <!-- Action -->
      <form action="/tasks" method="post" class="add">
        @csrf
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1"
            ><span class="oi oi-pencil"></span
          ></span>
          <input
            id="texte"
            name="task"
            type="text"
            class="form-control"
            placeholder="Prendre une note…"
            aria-label="My new idea"
            aria-describedby="basic-addon1"
          />
          <input 
          type='submit'
          name='envoyer' >
        </div>
      </form>

      <!-- Liste -->
      <ul class="list-group">

        @forelse ($tasks as $todo)
                <li class="list-group-item">
                  
                  <span>{{ $todo->texte }} </span>
                  <a href="/tasks/delete/{{$todo->id }}"> Supprimer</a>
                  <a href="/tasks/edit/{{$todo->id }}"> Modifier</a>


                  <!-- Action à ajouter pour Terminer et supprimer -->
                </li>
                @empty
                <li class="list-group-item text-center">Inscrivez votre première tache</li>
        @endforelse

      </ul>
    </div>
  </div>
</div>

@endsection
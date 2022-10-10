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
      <form action="/tasks/edit/{{$task->id}}" method="post" class="add">
        @csrf
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1"
            ><span class="oi oi-pencil"></span
          ></span>
          <input value="{{$task->texte}}"
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
      
    </div>
  </div>
</div>

@endsection
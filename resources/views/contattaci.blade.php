<x-layout>

<div class="container contattaci-box">
    <form method="POST" action="{{route('sendmail')}}">
    @csrf
    <div class="form-floating mb-3">
        <input name="mail" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating mb-3">
        <input name="username" type="text" class="form-control" id="floatingTextarea1" placeholder="Digita il tuo nome">
        <label for="floatingTextarea1">Digita il tuo nome</label>
      </div>
      <div class="form-floating mb-3">
        <textarea name="comment" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
        <label for="floatingTextarea2">Comments</label>
      </div>
      <button type="submit" class="btn btn-primary">Invia i dati</button>
    </form>
</div>
    
</x-layout>
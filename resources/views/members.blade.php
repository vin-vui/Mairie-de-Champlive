<header>
    @include('home._partials.header-page')
</header>

<body>
    <h1 class="shadow_text font-h1 text-center text-3xl mb-24" >
        Conseil municipal
    </h1>

    @foreach ($members as $member)
      <div>
    {{ $member->position }}
{{ $member->firstname }} {{ $member->lastname }}
    </div>

    <div>

    </div>  
    @endforeach
    
</body>

<footer>
    @include('home._partials.footer-page')
</footer>


{{-- Est ce que c'est ça pour mettre une image par défaut si pas d'image ?? --}}
{{-- src="{{ $article->image != null ? Storage::url($article->image) : url('img/office1.png') }}" alt="{{ $article->title }}"> --}}
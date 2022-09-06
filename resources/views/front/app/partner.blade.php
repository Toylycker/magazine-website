@if ($loop->even)
    <div class="row mt-5">
        <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 py-5"
            style="overflow: auto;
        max-height: 600px;">
            <div class="{{ $dark ? 'text-white' : 'text-dark' }}">
                @auth
                    <a href="{{ route('admin.partner.edit', $partner->id) }}" class="btn btn-success mt-3">
                        <i class="bi bi-pencil-fill"></i> @lang('app.edit')
                    </a>
                    <form action="{{ route('partner.destroy', $partner->id) }}" enctype="multipart/form-data" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn mt-3 btn-danger"><i class="bi bi-trash-fill"></i>
                            @lang('app.delete')</button>
                    </form>
                @endauth
                <h3><span class="{{ $dark ? 'text-white' : 'text-dark' }}">{{ $partner->name() }}</span></h3>
                <p class="pt-3 ">{{ $partner->description() }}</p>
                <div>
                    <div class="row d-flex justify-content-center">
                        @foreach ($partner->links as $link)
                            @if ($link->name === 'phone')
                                <a href="tel:{{ $link->link }}" class=" btn btn-primary mt-3"><i
                                        class="bi bi-telephone-outbound"></i> {{ $link->link }}</a>
                            @elseif($link->name === 'instagram')
                                <a href="https://www.instagram.com/{{ $link->link }}" class=" btn btn-primary mt-3"><i
                                        class="bi bi-instagram mx-1"></i>{{ $link->link }}</a>
                            @elseif($link->name === 'facebook')
                                <a href="https://www.facebook.com/{{ $link->link }}" class=" btn btn-primary mt-3"><i
                                        class="bi bi-facebook"></i> {{ $link->link }}</a>
                            @elseif($link->name === 'mail')
                                <a href="mailto:{{ $link->link }}" class=" btn btn-primary mt-3"><i
                                        class="bi bi-envelope"></i> {{ $link->link }}</a>
                            @elseif($link->name === 'website')
                                <a href="https://{{ $link->link }}" class=" btn btn-primary mt-3"><i
                                        class="bi bi-globe"></i> {{ $link->link }}</a>
                            @elseif($link->name === 'map')
                                <a href="https://www.google.com/maps/place/{{ $link->link }}"
                                    class=" btn btn-primary mt-3"><i class="bi bi-geo-alt"></i> {{ $link->link }}</a>
                            @else
                                <a href="{{ $link->link }}" class=" btn btn-primary mt-3">{{ $link->name }}:
                                    {{ $link->link }}</a>
                            @endif
                        @endforeach

                        {{-- subscribe start --}}
                        <!-- Button trigger modal -->
                        <button type="button" class="mt-3 btn btn-small btn-success"
                             data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop{{ $partner->id }}">
                            @lang('app.subscribe')
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop{{ $partner->id }}" data-bs-backdrop="false"
                            data-bs-keyboard="false" tabindex="9999999999999" aria-labelledby="staticBackdropLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-dark" id="staticBackdropLabel">@lang('app.subscribe_to_partner')
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div action="{{ route('partner.subscribe', $partner->id) }}"
                                            id="form{{ $partner->id }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <label class="text-dark" for="mail">Email</label>
                                            <div style="display: none;" id="success{{ $partner->id }}"
                                                class="alert alert-success mb-1"></div>
                                            <input class="form-control @error('mail') is-invalid @enderror"
                                                name="mail" id="mailinput{{ $partner->id }}" rows="1"
                                                maxlength="25">
                                            <div style="display: none;" id="alert{{ $partner->id }}"
                                                class="alert alert-danger mt-1">@lang('app.wrong_email')</div>
                                            <button class="mt-3 btn btn-small btn-success"
                                                id="button{{ $partner->id }}">@lang('app.submit')</button>
                                        </div>
                                    </div>
                                    {{-- <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <a class="btn btn-primary"
                                            onclick="event.preventDefault(); document.getElementById('form{{ $partner->id }}').submit();">@lang('app.submit')</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>


                        {{-- subscribe end --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 mt-4 mt-md-0">
            {{-- <img src="{{asset('img/download-13.jpg')}}" alt="" class="img-fluid shadow w-100"> --}}

            {{-- image carousel even start --}}
            @if ($partner->images->count())
                <div id="carouselExampleControls{{ $partner->id }}" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($partner->images as $image)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <img src="{{ $image->partner_image() }}" class="d-block img-fluid shadow "
                                    alt="...">
                            </div>
                        @endforeach
                    </div>
                    @if ($partner->images->count() > 1)
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleControls{{ $partner->id }}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleControls{{ $partner->id }}" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    @endif
                </div>
                {{-- @else --}}
                {{-- image for even carousel else start --}}
                {{-- <div>
                    <img class="img-fluid rounded shadow " src="{{ asset('img/partner-1.jpg') }}">
                </div> --}}
                {{-- image for even else end --}}
            @endif
        </div>
    </div>
    {{-- image carousel even end --}}
@else
    <div class="row mt-5">
        <div class="col-lg-5 col-md-6 align-self-center mt-4 mt-md-0">
            {{-- <img src="{{asset('img/download-13.jpg')}}" alt="" class="img-fluid shadow w-100"> --}}

            {{-- image carousel odd start --}}
            @if ($partner->images->count())
                <div id="carouselExampleControls{{ $partner->id }}" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($partner->images as $image)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <img src="{{ $image->partner_image() }}" class="d-block img-fluid shadow w-100"
                                    alt="...">
                            </div>
                        @endforeach
                    </div>
                    @if ($partner->images->count() > 1)
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleControls{{ $partner->id }}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleControls{{ $partner->id }}" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    @endif
                </div>
            @else
                {{-- <div>
                    <img class="img-fluid rounded" src="{{asset('img/J6qtfFlCgF-307.jpeg')}}"> --}}

                {{-- image carousel odd else start
                    <div id="carouselExampleControls{{ $partner->id }}" class="carousel slide"
                        data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/partner-2.jpg') }}" class="d-block rounded shadow"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/partner-3.jpg') }}" class="shadow rounded d-block"
                                    alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleControls{{ $partner->id }}" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleControls{{ $partner->id }}" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div> --}}

                {{-- image carousel odd else end --}}
            @endif
            {{-- image carousel odd end --}}
        </div>
        <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-md-2 py-5"
            style="overflow: auto;
        max-height: 600px;direction: rtl;">
            <div class=" {{ $dark ? 'text-white' : 'text-dark' }} h-50" style="direction:ltr;">
                @auth
                    <a href="{{ route('admin.partner.edit', $partner->id) }}" class="btn btn-success mt-3">
                        <i class="bi bi-pencil-fill"></i> @lang('app.edit')
                    </a>
                    <form action="{{ route('partner.destroy', $partner->id) }}" enctype="multipart/form-data"
                        method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn mt-3 btn-danger"><i class="bi bi-trash-fill"></i>
                            @lang('app.delete')</button>
                    </form>
                @endauth
                <h3><span class="{{ $dark ? 'text-white' : 'text-dark' }}">{{ $partner->name() }}</span></h3>
                <p class="pt-3">{{ $partner->description() }}</p>
                <div>
                    <div class="row">
                        @foreach ($partner->links as $link)
                            @if ($link->name === 'phone')
                                <a href="tel:{{ $link->link }}" class=" btn btn-primary mt-3"><i
                                        class="bi bi-telephone-outbound"></i> {{ $link->link }}</a>
                            @elseif($link->name === 'instagram')
                                <a href="https://www.instagram.com/{{ $link->link }}"
                                    class=" btn btn-primary mt-3"><i
                                        class="bi bi-instagram mx-1"></i>{{ $link->link }}</a>
                            @elseif($link->name === 'facebook')
                                <a href="https://www.facebook.com/{{ $link->link }}"
                                    class=" btn btn-primary mt-3"><i class="bi bi-facebook"></i>
                                    {{ $link->link }}</a>
                            @elseif($link->name === 'mail')
                                <a href="mailto:{{ $link->link }}" class=" btn btn-primary mt-3"><i
                                        class="bi bi-envelope"></i> {{ $link->link }}</a>
                            @elseif($link->name === 'website')
                                <a href="https://{{ $link->link }}" class=" btn btn-primary mt-3"><i
                                        class="bi bi-globe"></i> {{ $link->link }}</a>
                            @elseif($link->name === 'map')
                                <a href="https://www.google.com/maps/place/{{ $link->link }}"
                                    class=" btn btn-primary mt-3"><i class="bi bi-geo-alt"></i>
                                    {{ $link->link }}</a>
                            @else
                                <a href="{{ $link->link }}" class=" btn btn-primary mt-3">{{ $link->name }}:
                                    {{ $link->link }}</a>
                            @endif
                        @endforeach

                        {{-- subscribe start --}}
                        <!-- Button trigger modal -->
                        <button type="button" class=" mt-3 btn btn-small btn-success"
                             data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop{{ $partner->id }}">
                            @lang('app.subscribe')
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop{{ $partner->id }}" data-bs-backdrop="false"
                            data-bs-keyboard="false" tabindex="9999999999999" aria-labelledby="staticBackdropLabel"
                            aria-hidden="true">
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-dark" id="staticBackdropLabel">@lang('app.subscribe_to_partner')
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div action="{{ route('partner.subscribe', $partner->id) }}"
                                            id="form{{ $partner->id }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <label class="text-dark" for="mail">Email</label>
                                            <div style="display: none;" id="success{{ $partner->id }}"
                                                class="alert alert-success mb-1"></div>
                                            <input class="form-control @error('mail') is-invalid @enderror"
                                                name="mail" id="mailinput{{ $partner->id }}" rows="1"
                                                maxlength="25">
                                            <div style="display: none;" id="alert{{ $partner->id }}"
                                                class="alert alert-danger mt-1">@lang('app.wrong_email')</div>
                                            <button class="mt-3 btn btn-small btn-success"
                                                id="button{{ $partner->id }}">@lang('app.submit')</button>
                                        </div>
                                    </div>
                                    {{-- <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <a class="btn btn-primary"
                                            onclick="event.preventDefault(); document.getElementById('form{{ $partner->id }}').submit();">@lang('app.submit')</a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        {{-- subscribe end --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
<script type="text/javascript">
    $(document).ready(function() {
        $('{{ '#button' . $partner->id }}').click(function() {
            $(this).append(
                '<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>'
                );
            $(this).prop('disabled', true);
            $('{{ '#alert' . $partner->id }}').hide();
            // $({{ '#form' . $partner->id }}).submit(function(e) {


            //do your own request an handle the results
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'post',
                url: '/partners/{{ $partner->id }}/subscribe',
                data: {
                    mail: $('{{ '#mailinput' . $partner->id }}').val(),
                    _token: '{{ csrf_token() }}'
                },
                dataType: 'json',
                success: function(data) {
                    $('{{ '#success' . $partner->id }}').html(data.success).show().fadeIn('slow');
                    $('{{ '#mailinput' . $partner->id }}').val(''),
                    $('{{ '#success' . $partner->id }}').delay(2000).fadeOut('slow');
                    setTimeout(() => {
                        $('.modal .btn-close').click();
                    }, 2000);
                    $('{{ '#button' . $partner->id }}').children().remove();
                    $('{{ '#button' . $partner->id }}').prop('disabled', false);

                },
                error: function(data, textStatus, errorThrown) {
                    $('{{ '#alert' . $partner->id }}').show();
                    $('{{ '#button' . $partner->id }}').children().remove();
                    $('{{ '#button' . $partner->id }}').prop('disabled', false);

                },
            });

            // });
        });
    });
</script>
<style>
    .modal-dialog {
        top: calc(100% - 450px);
    }
</style>

{{-- <script>
    $(document).ready(function () {
                fetchi();

                function fetchi(){
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                        type: "GET",
                        url: "/some",
                        data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
                        dataType: "json",
                        success: function (response) {
                            // console.log(response.result); 
                            $.each(response.result, function (key, item) { 
                                 
                            });
                        },
                        error: function (data, textStatus, errorThrown) {
                        console.log(data);

                    },
                    });
                }
            });
</script> --}}

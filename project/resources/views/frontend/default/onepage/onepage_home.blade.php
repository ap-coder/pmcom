<div class="section-body">
    @if(has_option('homepage', 'style') == 'bgvideo')<div id="bgndVideo" data-property="{videoURL:'{{has_option('homepage', 'bgvideo')}}',containment:'.section-home',autoPlay:true, mute:true, startAt:0, opacity:1, loop:true, showControls:false}"></div>@endif
    @if(has_option('homepage', 'particles'))<div id="particles-js"></div>@endif
    <div class="container">
        <div class="intro display-table">
            <div class="display-table-cell"> 
{{-- <h2 itemprop="about" style="margin-top:5%; margin-left:15%; margin-right:15%;">Are You Struggling To Find A Web Developer or Designer Who Understands You And Your Business?</h2>

<p itemprop="text" style="margin-left:10%; margin-right:10%;">If you've ever hired a web developer or designer in the past, you know how hard it can be to find one who's reliable — someone who knows how to take a problem and solve it! And even if you find the right developer, you soon discover that they don't understand you and your business goals. And without an understanding of both your business and the problems your trying to solve, the risk that you will fail increases.</p>

<h3 itemprop="about" style="margin-left:20%; margin-right:20%;">Don't gamble your hard earned money away when hiring a web developer.</h3>

<p itemprop="text" style="margin-left:10%; margin-right:10%;">What if your hired a seasoned web developer who was not only trustworthy and reliable, but knows that you just don't want code written... But that you need to make a positive retun on your investment? That you want to make your business better off than it is today?</p> --}}


                @if(has_option('homepage', 'title'))<h3>{{has_option('homepage', 'title')}}</h3>@endif
                @if(has_option('homepage', 'subtitle'))<h1 itemprop="headline">{{has_option('homepage', 'subtitle')}}</h1>@endif
                @if(has_option('homepage', 'description'))<p itemprop="description">{!! has_option('homepage', 'description') !!}</p>@endif
                <div class="type-wrap">
                    @if(has_option('homepage', 'typedtitle'))<span class="type-title">{{has_option('homepage', 'typedtitle')}}</span>@endif
                    @if(has_option('homepage', 'typed') and count(has_option('homepage', 'typed')))
                    <div class="typed-strings">
                        @foreach (has_option('homepage', 'typed') as $item)
                        <span><strong>{{$item['title']}}</strong></span>
                        @endforeach
                    </div>
                    <span class="typed"></span> 
                    @endif
                </div>  

{{-- <p itemprop="text" style="margin-left:10%; margin-right:10%;">I'm also a business owner. I've built my company and reputation on trust, hard work, and results. I would love to learn about you, your company, and what you want future to look like for your business.</p>

<p itemprop="text" style="margin-left:10%; margin-right:10%;">Together, we'll put together a plan of action that realizes that future, divided into specific milestones.</p>

<p itemprop="text" style="margin-left:10%; margin-right:10%;">I don't just build websites and software. My strategic approach to content development, design, user interaction, and programming has given many companies the tools that they need to get noticed. And, help their audience find information they need, and discover products they want to buy.</p> --}}




                @if(has_option('homepage', 'buttonsstatus'))
                <div class="buttons">
                @foreach (has_option('homepage', 'buttons') as $key => $item)
                    @if(isset($item['status']) and $item['status'])
                    @if(has_option('style', 'template') == 'onepage')
                    <a href="{{url('/#'.get_class_section($item['widget']))}}" data-has="#{{get_class_section($item['widget'])}}" class="@if($item['widget'] == $page_class) active @endif button" itemprop="url"><span><i class="{{$item['icon']}}"></i> {{$item['title']}}</span></a>
                    @else
                    <a href="{{url(get_class_section($item['widget'], true))}}" data-has="#{{get_class_section($item['widget'])}}" class="@if(get_class_section($item['widget']) == $page_class) active @endif button"><span><i class="{{$item['icon']}}"></i> {{$item['title']}}</span></a>
                    @endif
                    @endif
                @endforeach
                </div>
                @endif


{{-- <p itemprop="text" style="margin-top:5%; margin-left:10%; margin-right:10%;">I don't want to have "former clients". I want to build long term, meaningful relationships with everyone I work with. This means I am looking to build a pipeline of partners that can rely on me now and at anytime in the future.</p> --}}



            </div>
        </div>
    </div>
</div>
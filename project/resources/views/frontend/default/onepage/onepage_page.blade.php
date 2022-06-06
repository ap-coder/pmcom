<div class="section-body">
    <div class="container">
        <div class="section-inner">
            @php
                $data=query_posts_meta($page_id);
                if($data['bgimage']){
                    $style='background: url('.$data['bgimage'].');';
                    $class1='section-header-image';
                    $class2='section-header-image-color';
                }else{
                    $style='';
                    $class='';
                    $class2='';
                }
            @endphp
            
            <div class="section-title {{ $class1 }}" style="{{ $style }}">
                <div class="{{ $class2 }}">
                    <h2>{{get_post_title($page_id)}}</h2>
                    <p>{{get_post_column($page_id, 'post_excerpts')}}</p>
                    <div class="divider"></div>
                </div>
            </div>
            <div class="mt-30 mb-30">
                {!! get_post_column($page_id, 'post_content') !!}
            </div>
        </div>
    </div>
</div>
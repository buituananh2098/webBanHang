@if(isset($categoryHighLight) && !empty($categoryHighLight))
<div class="row">
    <div class="span16 " >
        <div class="row">
            <div class="span16" >
                <div class="vs-mainbox-general clearfix">
                    <h2 class="vs-mainbox-title clearfix">
                        <i class="vs-icon-justify"></i><span>Danh mục nổi bật</span>
                    </h2>
                    <div class="vs-mainbox-body clearfix">
                        <div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type=""><span></span></div>
                    </div>
                </div>
            </div>
        </div>
        @if(count($categoryHighLight) > 8)
            <div class="row">
                <div class="span16" >
                    <div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type="">
                        <div class="truyenmai">
                            @for($i=0; $i<8; $i++)
                                <div class="truyenmai-icon text-center" style="padding: 0 10px;">
                                    <a href="{{ $categoryHighLight[$i]->slug }}">
                                        <img src="{{ $categoryHighLight[$i]->avatar }}" alt="{{ $categoryHighLight[$i]->name }}">
                                        <p>{{ $categoryHighLight[$i]->name }}</p>
                                    </a>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="span16" >
                    <div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type="">
                        <div class="truyenmai">
                            @for($i=8; $i<count($categoryHighLight); $i++)
                                <div class="truyenmai-icon text-center" style="padding: 0 10px;">
                                    <a href="{{ $categoryHighLight[$i]->slug }}">
                                        <img src="{{ $categoryHighLight[$i]->avatar }}" alt="{{ $categoryHighLight[$i]->name }}">
                                        <p>{{ $categoryHighLight[$i]->name }}</p>
                                    </a>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        @else
        <div class="row">
            <div class="span16" >
                <div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type="">
                    <div class="truyenmai">
                        @for($i=0; $i<count($categoryHighLight); $i++)
                            <div class="truyenmai-icon text-center" style="padding: 0 10px;">
                                <a href="{{ $categoryHighLight[$i]->slug }}">
                                    <img src="{{ $categoryHighLight[$i]->avatar }}" alt="{{ $categoryHighLight[$i]->name }}">
                                    <p>{{ $categoryHighLight[$i]->name }}</p>
                                </a>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endif

<div class="row">
    <div class="span16 " >
        <div class="vs-mainbox-general clearfix">
            <h2 class="vs-mainbox-title clearfix">
                <i class="vs-icon-justify"></i><span>Bộ sưu tập mới</span>
            </h2>
            <div class="vs-mainbox-body clearfix">
                <div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type=""><span></span></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    @foreach($collectionNameNew  as $collect)
    <div class="span8 " >
        <div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type="">
            <div class="new-collect"><a href="{{ $collect-> slug }}">
                    <img class="lazy" alt="" data-srcset="{{ $collect-> avatar }}" src="{{ $collect-> avatar }}" />
                </a>
                <a class="new-collect-title" href="{{ $collect-> slug }}">{{ $collect-> name }} </a>
            </div>
        </div>
    </div>
    @endforeach
</div>

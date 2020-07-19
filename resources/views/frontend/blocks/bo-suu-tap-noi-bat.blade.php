<div class="vs-mainbox-general clearfix section-6">
    <h2 class="vs-mainbox-title clearfix">
        <i class="vs-icon-justify"></i><span>Bộ Sưu Tập nổi bật</span>
    </h2>
    <div class="vs-mainbox-body clearfix">
        <div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type="">
            <div class="hot-collect">
                <div class="custom-row">
                    @foreach($collectionNameHighlight as $collect)
                    <div class="collect-content-3">
                        <a href="{{ $collect -> slug }}">
                            <img class="lazy" data-srcset="{{ $collect -> avatar }}" src="{{ $collect -> avatar }}" />
                        </a>
                        <a href="{{ $collect -> slug }}"> {{ $collect->name }} </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-body">
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.name') }} <span class="required"></span> </label>
        <div class="col-md-6">
            <input type="text" name="name" value="{{ getData($data, 'name') }}" class="form-control" placeholder="{{ trans('main.name') }}" required>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <!-- Add Course's Category -->
    <div class="form-group{{ $errors->has('cat_id') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.category') }} <span class="required"></span> </label>
        <div class="col-md-8">
            <select class="form-control select2" id="cat_id" name="cat_id">
                <option value="">{{ trans('main.select category') }}</option>
                @foreach ($cat as $c)
                    <option value="{{ $c->id }}" {{ getData($data, 'cat_id') == $c->id ? 'selected' : '' }}>{{ $c->name }}</option>
                @endforeach
            </select>
            @if ($errors->has('cat_id'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('cat_id') }}</strong>
                </span>
            @endif
        </div>
    </div>

        <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
            <label class="col-md-2 control-label">{{ trans('main.description') }} <span class="required"></span> </label>
            <div class="col-md-6">
                <input type="text" name="desc" value="{{ getData($data, 'desc') }}" class="form-control" placeholder="{{ trans('main.description') }}" >
                @if ($errors->has('desc'))
                    <span class="help-block">
                        <strong class="help-block">{{ $errors->first('desc') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
            <label class="col-md-2 control-label">{{ trans('main.price') }} <span class="required"></span> </label>
            <div class="col-md-6">
                <input type="text" name="price" value="{{ getData($data, 'price') }}" class="form-control" placeholder="{{ trans('main.price') }}" >
                @if ($errors->has('price'))
                    <span class="help-block">
                        <strong class="help-block">{{ $errors->first('price') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('metatitle') ? ' has-error' : '' }}">
            <label class="col-md-2 control-label">{{ trans('main.metatitleription') }}  </label>
            <div class="col-md-6">
                <input type="text" name="metatitle" value="{{ getData($data, 'metatitle') }}" class="form-control" placeholder="{{ trans('main.metatitleription') }}" >
                @if ($errors->has('metatitle'))
                    <span class="help-block">
                        <strong class="help-block">{{ $errors->first('metatitle') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('metakeyword') ? ' has-error' : '' }}">
            <label class="col-md-2 control-label">{{ trans('main.metakeywordription') }}  </label>
            <div class="col-md-6">
                <input type="text" name="metakeyword" value="{{ getData($data, 'metakeyword') }}" class="form-control" placeholder="{{ trans('main.metakeywordription') }}" >
                @if ($errors->has('metakeyword'))
                    <span class="help-block">
                        <strong class="help-block">{{ $errors->first('metakeyword') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('metadescr') ? ' has-error' : '' }}">
            <label class="col-md-2 control-label">{{ trans('main.metadescrription') }}  </label>
            <div class="col-md-6">
                <input type="text" name="metadescr" value="{{ getData($data, 'metadescr') }}" class="form-control" placeholder="{{ trans('main.metadescrription') }}" >
                @if ($errors->has('metadescr'))
                    <span class="help-block">
                        <strong class="help-block">{{ $errors->first('metadescr') }}</strong>
                    </span>
                @endif
            </div>
        </div>


</div>

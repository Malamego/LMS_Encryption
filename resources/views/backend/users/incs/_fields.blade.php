<div class="form-body">
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.name') }} <span class="required"></span> </label>
        <div class="col-md-10">
            <input type="text" name="name" value="{{ getData($data, 'name') }}" class="form-control" placeholder="{{ trans('main.name') }}" required>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.email') }} <span class="required"></span> </label>
        <div class="col-md-10">
            <input type="email" name="email" value="{{ getData($data, 'email') }}" class="form-control" placeholder="{{ trans('main.email') }}" required>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
        <label class="control-label col-md-2">{{ trans('main.image') }}</label>
        <div class="col-md-10">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                    @if (checkValue(getData($data, 'image')))
                        <img src="{{ ShowImage(getData($data, 'image')) }}" alt="" />
                    @endif
                </div>
                <div>
                    <span class="btn red btn-outline btn-file">
                        <span class="fileinput-new"> {{ trans('main.select_image') }} </span>
                        <span class="fileinput-exists"> {{ trans('main.change') }} </span>
                        <input type="file" name="image">
                    </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> {{ trans('main.remove') }} </a>
                </div>
            </div>
            @if ($errors->has('image'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('image') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.type') }} <span class="required"></span> </label>
        <div class="col-md-10">
            <select class="form-control" id="type" name="type">
                <option value=""></option>
                <option value="user" {{ getData($data, 'type') == 'user' ? ' selected' : '' }}>{{trans('main.user')}}</option>
                <!-- <option value="admin" {{ getData($data, 'type') == 'admin' ? ' selected' : '' }}>{{trans('main.admin')}}</option> -->
            </select>
            @if ($errors->has('type'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('type') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <!-- Add Student's Class -->
    <div class="form-group{{ $errors->has('class') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.class') }} <span class="required"></span> </label>
        <div class="col-md-10">
            <select class="form-control" id="class_id" name="class_id">
              @foreach ($cls as $c)
                  <option value="{{ $c->id }}" {{ getData($data, 'class_id') == $c->id ? 'selected' : '' }}>{{ $c->name }}</option>
              @endforeach
            </select>
            @if ($errors->has('class_id'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('class_id') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <!-- Add The father Job -->
    <div class="form-group{{ $errors->has('fatherjob') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.fatherjob') }} <span class="required"></span> </label>
        <div class="col-md-10">
            <input type="text" fatherjob="fatherjob" value="{{ getData($data, 'fatherjob') }}" class="form-control" placeholder="{{ trans('main.fatherjob') }}" required>
            @if ($errors->has('fatherjob'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('fatherjob') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <!-- Add Country -->
    <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.country') }} <span class="required"></span> </label>
        <div class="col-md-10">
            <input type="text" country="country" value="{{ 'Egypt' }}" class="form-control" placeholder="{{ trans('main.country') }}" readonly >
            @if ($errors->has('country'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('country') }}</strong>
                </span>
            @endif
        </div>
    </div>

<!-- Add Static City  -->
    <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.city') }} <span class="required"></span> </label>
        <div class="col-md-10">
            <select class="form-control" id="city" name="city">
                <option value=""></option>
                <option value="alexandria" {{ getData($data, 'city') == 'alexandria' ? ' selected' : '' }}>{{trans('main.alexandria')}}</option>
                <option value="aswan" {{ getData($data, 'city') == 'aswan' ? ' selected' : '' }}>{{trans('main.aswan')}}</option>
                <option value="asyut" {{ getData($data, 'city') == 'asyut' ? ' selected' : '' }}>{{trans('main.asyut')}}</option>
                <option value="beheira" {{ getData($data, 'city') == 'beheira' ? ' selected' : '' }}>{{trans('main.beheira')}}</option>
                <option value="benisuef" {{ getData($data, 'city') == 'benisuef' ? ' selected' : '' }}>{{trans('main.benisuef')}}</option>
                <option value="cairo" {{ getData($data, 'city') == 'cairo' ? ' selected' : '' }}>{{trans('main.cairo')}}</option>
                <option value="dakahlia" {{ getData($data, 'city') == 'dakahlia' ? ' selected' : '' }}>{{trans('main.dakahlia')}}</option>
                <option value="damietta" {{ getData($data, 'city') == 'damietta' ? ' selected' : '' }}>{{trans('main.damietta')}}</option>
                <option value="faiyum" {{ getData($data, 'city') == 'faiyum' ? ' selected' : '' }}>{{trans('main.faiyum')}}</option>
                <option value="gharbia" {{ getData($data, 'city') == 'gharbia' ? ' selected' : '' }}>{{trans('main.gharbia')}}</option>
                <option value="giza" {{ getData($data, 'city') == 'giza' ? ' selected' : '' }}>{{trans('main.giza')}}</option>
                <option value="ismailia" {{ getData($data, 'city') == 'ismailia' ? ' selected' : '' }}>{{trans('main.ismailia')}}</option>
                <option value="kafrelsheikh" {{ getData($data, 'city') == 'kafrelsheikh' ? ' selected' : '' }}>{{trans('main.kafrelsheikh')}}</option>
                <option value="luxor" {{ getData($data, 'city') == 'luxor' ? ' selected' : '' }}>{{trans('main.luxor')}}</option>
                <option value="matruh" {{ getData($data, 'city') == 'matruh' ? ' selected' : '' }}>{{trans('main.matruh')}}</option>
                <option value="minya" {{ getData($data, 'city') == 'minya' ? ' selected' : '' }}>{{trans('main.minya')}}</option>
                <option value="monufia" {{ getData($data, 'city') == 'monufia' ? ' selected' : '' }}>{{trans('main.monufia')}}</option>
                <option value="newvalley" {{ getData($data, 'city') == 'newvalley' ? ' selected' : '' }}>{{trans('main.newvalley')}}</option>
                <option value="northsinai" {{ getData($data, 'city') == 'northsinai' ? ' selected' : '' }}>{{trans('main.northsinai')}}</option>
                <option value="portsaid" {{ getData($data, 'city') == 'portsaid' ? ' selected' : '' }}>{{trans('main.portsaid')}}</option>
                <option value="qalyubia" {{ getData($data, 'city') == 'qalyubia' ? ' selected' : '' }}>{{trans('main.qalyubia')}}</option>
                <option value="qena" {{ getData($data, 'city') == 'qena' ? ' selected' : '' }}>{{trans('main.qena')}}</option>
                <option value="redsea" {{ getData($data, 'city') == 'redsea' ? ' selected' : '' }}>{{trans('main.redsea')}}</option>
                <option value="sharqia" {{ getData($data, 'city') == 'sharqia' ? ' selected' : '' }}>{{trans('main.sharqia')}}</option>
                <option value="sohag" {{ getData($data, 'city') == 'sohag' ? ' selected' : '' }}>{{trans('main.sohag')}}</option>
                <option value="southsinai" {{ getData($data, 'city') == 'southsinai' ? ' selected' : '' }}>{{trans('main.southsinai')}}</option>
                <option value="suez" {{ getData($data, 'city') == 'suez' ? ' selected' : '' }}>{{trans('main.suez')}}</option>
            </select>
            @if ($errors->has('city'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('city') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.password') }}
            @if ($action == 'create')
                <span class="required"></span>
            @endif
        </label>
        <div class="col-md-10">
            <input type="password" name="password" class="form-control" placeholder="{{ trans('main.password') }}" {{ $action == 'create' ? 'required' : '' }}>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.password_confirmation') }}
            @if ($action == 'create')
                <span class="required"></span>
            @endif
        </label>
        <div class="col-md-10">
            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ trans('main.password_confirmation') }}" {{ $action == 'create' ? 'required' : '' }}>
            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
        </div>
    </div>
<!-- Add by Mario for Phone -->
    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
        <label class="col-md-2 control-label">{{ trans('main.phone') }} <span class="required"></span> </label>
        <div class="col-md-10">
            <input type="text" name="phone" value="{{ getData($data, 'phone') }}" class="form-control" placeholder="{{ trans('main.phone') }}" required>
            @if ($errors->has('phone'))
                <span class="help-block">
                    <strong class="help-block">{{ $errors->first('phone') }}</strong>
                </span>
            @endif
        </div>
    </div>


<!-- Add by Mario for ID Number -->
        <div class="form-group{{ $errors->has('identity') ? ' has-error' : '' }}">
            <label class="col-md-2 control-label">{{ trans('main.identity') }}  </label>
            <div class="col-md-10">
                <input type="text" name="identity" value="{{ getData($data, 'identity') }}" class="form-control" placeholder="{{ trans('main.identity') }}" required>
                @if ($errors->has('identity'))
                    <span class="help-block">
                        <strong class="help-block">{{ $errors->first('identity') }}</strong>
                    </span>
                @endif
            </div>
        </div>


    <div class='form-group hidden' id="roles">
        <label class="col-md-2 control-label">{{ trans('main.assign_rolles') }}</label>
        <div class="col-md-10">
            @foreach ($roles->chunk(4) as $roleCh)
                <div class="row">
                    @foreach ($roleCh as $role)
                        <div class="col-md-3">
                            <span style="margin-right: 3px">
                                {{ Form::checkbox('roles[]',  $role->id) }}
                                {{ Form::label($role->name, ucfirst($role->name)) }}
                            </span>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</div>

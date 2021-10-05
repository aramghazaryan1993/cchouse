        <section>
            <div class="form_block">
                <div class="bigContainer">
                    <div class="title_text pt-5">
                        @foreach($ShowGlobalVApros as $value)
                        <h2>{{ $value->vapros1 }}</h2>
                        <p>{{ $value->vapros2 }}</p>
                        @endforeach
                    </div>
                    <form action="{{ route('send vapros email') }}" method="post">
                        @csrf
                        <div class="form_group">
                            <div class="group">
                                <input type="text" name="name" required>
                                <label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <defs>
                                            <style>
                                                .cls-1 {
        opacity: 0.7;
      }

      .cls-2 {
        fill: none;
      }
    </style>
                                        </defs>
                                        <g id="baseline-person-24px" class="cls-1">
                                            <path id="Path_292" data-name="Path 292" d="M12,12A4,4,0,1,0,8,8,4,4,0,0,0,12,12Zm0,2c-2.67,0-8,1.34-8,4v2H20V18C20,15.34,14.67,14,12,14Z" />
                                            <path id="Path_293" data-name="Path 293" class="cls-2" d="M0,0H24V24H0Z" />
                                        </g>
                                    </svg>
                                    Имя <span>*</span></label>
                            </div>
                            <div class="group">
                                <input type="tel" name="phone" required onkeypress='return event.charCode >= 48 && event.charCode <= 57 || event.charCode == 43'>
                                <input type="hidden"  name="segment" value="{{ Request::url() }}">
                                <label class="maillabel">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <defs>
                                            <style>
                                                .cls-1 {
        opacity: 0.7;
      }

      .cls-2 {
        fill: none;
      }
    </style>
                                        </defs>
                                        <g id="baseline-local_phone-24px" class="cls-1">
                                            <path id="Path_191" data-name="Path 191" class="cls-2" d="M0,0H24V24H0Z" />
                                            <path id="Path_192" data-name="Path 192" d="M6.62,10.79a15.149,15.149,0,0,0,6.59,6.59l2.2-2.2a.994.994,0,0,1,1.02-.24,11.407,11.407,0,0,0,3.57.57,1,1,0,0,1,1,1V20a1,1,0,0,1-1,1A17,17,0,0,1,3,4,1,1,0,0,1,4,3H7.5a1,1,0,0,1,1,1,11.36,11.36,0,0,0,.57,3.57,1,1,0,0,1-.25,1.02Z" />
                                        </g>
                                    </svg>
                                    Телефон <span>*</span></label>
                            </div>
                            <div class="group">
                                <input type="email" name="email" required>
                                <label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <defs>
                                            <style>
                                                .cls-1 {
        opacity: 0.7;
      }

      .cls-2 {
        fill: none;
      }
    </style>
                                        </defs>
                                        <g id="baseline-mail-24px" class="cls-1">
                                            <path id="Path_193" data-name="Path 193" d="M20,4H4A2,2,0,0,0,2.01,6L2,18a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2V6A2.006,2.006,0,0,0,20,4Zm0,4-8,5L4,8V6l8,5,8-5Z" />
                                            <path id="Path_194" data-name="Path 194" class="cls-2" d="M0,0H24V24H0Z" />
                                        </g>
                                    </svg>
                                    Email <span>*</span></label>
                            </div>
                        </div>
                        <div class="form_group2">
                            <div class="group">
                                <input type="textarea" name="text" required>
                                <label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <defs>
                                            <style>
                                                .cls-1 {
        opacity: 0.7;
      }

      .cls-2 {
        fill: none;
      }
    </style>
                                        </defs>
                                        <g id="baseline-create-24px" class="cls-1">
                                            <path id="Path_195" data-name="Path 195" d="M3,17.25V21H6.75L17.81,9.94,14.06,6.19ZM20.71,7.04a1,1,0,0,0,0-1.41L18.37,3.29a1,1,0,0,0-1.41,0L15.13,5.12l3.75,3.75,1.83-1.83Z" />
                                            <path id="Path_196" data-name="Path 196" class="cls-2" d="M0,0H24V24H0Z" />
                                        </g>
                                    </svg>
                                    Tекст <span>*</span></label>
                            </div>
                        </div>
                        <p><span>*</span> - обязательные для заполнения поля</p>
                        <div class="d-flex ">
                            <input name="yes" type="checkbox" id="chek" required>
                            <label for="chek">Я согласен на <a href="{{ route('contract view') }}">обработку персональных данных</a></label>
                        </div>
                        <button type="submit"> Отправить</button>
                    </form>
                </div>
            </div>
        </section>
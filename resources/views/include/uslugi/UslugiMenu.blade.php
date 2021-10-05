  <section>
            <div class="bigContainer  ">
                <div class="btn_section">
                    <a href="{{ route('uslugi remont view') }}"   class="@if(Request::segment(1) == 'Ремонт-квартир-под-ключ') uncolor @else blkcolor @endif">ремонт квартир под ключ</a>
                    <a href="{{ route('uslugi dizayner view') }}" class="@if(Request::segment(1) == 'Услуги-дизайнера') uncolor @else blkcolor @endif"> услуги дизайнера</a>
                    <a href="{{ route('uslugi dastavka view') }}" class="@if(Request::segment(1) == 'Доставка-материалов') uncolor @else blkcolor @endif">доставка материалов</a>
                </div>
            </div>
  </section>
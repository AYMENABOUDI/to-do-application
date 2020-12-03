<span class="stats-small__label text-uppercase textnormal">
@if(date('D') =='Mon')  
<span class="textnormal">Happy new week {{ Auth::user()->firstname }}</span>
@elseif(date('D') =='Tue')
<span class="textnormal">Happy Tuesday {{ Auth::user()->firstname }}</span>
@elseif(date('D') =='Wed')
<span class="textnormal">Happy Wednesday {{ Auth::user()->firstname }}</span>
@elseif(date('D') =='Thu')
<span class="textnormal">Happy Thursday {{ Auth::user()->firstname }}</span>
@elseif(date('D') =='Fri')
<span class="textnormal">Happy Friday {{ Auth::user()->firstname }}</span>
@elseif(date('D') =='Sat')
<span class="textnormal">Happy Happy weekend {{ Auth::user()->firstname }}</span>
@elseif(date('D') =='Sun')
<span class="textnormal">Happy Happy weekend {{ Auth::user()->firstname }}</span>
@endif
</span>

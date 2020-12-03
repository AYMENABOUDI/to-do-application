@if(date('D') =='Mon')  
Monday {{ date('d') }} {{ date('F Y') }}
@elseif(date('D') =='Tue')
Tuesday {{ date('d') }} {{ date('F Y') }}
@elseif(date('D') =='Wed')
Wednesday {{ date('d') }} {{ date('F Y') }}
@elseif(date('D') =='Thu')
Thursday {{ date('d') }} {{ date('F Y') }}
@elseif(date('D') =='Fri')
Friday {{ date('d') }} {{ date('F Y') }}
@elseif(date('D') =='Sat')
Saturday {{ date('d') }} {{ date('F Y') }}
@elseif(date('D') =='Sun')
Sunday {{ date('d') }} {{ date('F Y') }}
@endif

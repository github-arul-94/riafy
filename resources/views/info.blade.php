
<div class="row">


 <div class="col-col-12" style="margin-top : 30px;">
    <h5 class="">{{ $stock->name }}</h5>
  <div>
    <table class="table">
      <tr>
          <td>Market Cap</td>
          <td>{{ $stock->market_cap }}</td>
          <td>Divident Yield</td>
          <td>{{ $stock->divident_yield }}</td>
          <td>Deby Equilt</td>
          <td>{{ $stock->debt_to_equit }}</td>
      </tr>
      <tr>
          <td>Current Price</td>
          <td>{{ $stock->current_market_price }}</td>
          <td>ROCE</td>
          <td>{{ $stock->roce }}</td>
          <td>EPS</td>
          <td>{{ $stock->eps }}</td>
      </tr>
      <tr>
          <td>Stock P/E</td>
          <td>{{ $stock->stock_pe }}</td>
          <td>ROE</td>
          <td>{{ $stock->roce_previous }}</td>
          <td>Reserve</td>
          <td>{{ $stock->reservs }}</td>
      </tr>
      <tr>
          <td>Debt</td>
          <td>{{ $stock->debt }}</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
      </tr>
    </table>
    
  </div>
</div>
</div>

<div class="panel">

    <!--Panel heading-->
    <div class="panel-heading">
        <h3 class="panel-title">With table</h3>
    </div>

    <!--Default panel contents-->
    <div class="panel-body">
        <p>Some default panel content here. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div>

    <!--Table-->
    <table class="table">
        <thead>
        <tr>
            <th class="text-center">#</th>
            {{$field}}
        </tr>
        </thead>

        <tbody>
            {{$slot}}
        </tbody>
    </table>
</div>
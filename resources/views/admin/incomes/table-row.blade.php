<tr>
    <td class="py-1">
        <img src="{{asset('assets/images/faces/face1.jpg')}}" alt="image"/>
    </td>
    <td>
        {{$income->title}}
    </td>
    <td>
        <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </td>
    <td>
        $ {{$income->amount}}
    </td>
    <td>
        {{$income->created_at}}
    </td>
</tr>

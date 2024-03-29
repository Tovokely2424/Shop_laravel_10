@props(['modelDatas', 'modelname', 'columns'])
<div class="w-full px-6 py-6 mx-auto">
  <!-- table 1 -->

  <div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
      <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
          <h6>{{ $modelname }} table</h6>
        </div>
        <div class="flex-auto px-0 pt-0 pb-2">
          <div class="p-0 overflow-x-auto">
            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
              <thead class="align-bottom">
                <tr>
                  @foreach ($columns as $column)
                  <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">{{ $column }}</th>
                  @endforeach
                </tr>
              </thead>
              <tbody>
                @foreach ($modelDatas as $modelData)   
                
                <tr>
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <div class="flex px-2 py-1">
                      <div>
                        <img src="../assets/img/team-2.jpg" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user1" />
                      </div>
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-0 text-sm leading-normal">{{ $modelData->name }}</h6>
                        <p class="mb-0text-xsleading-tighttext-slate-400">{{ $modelData->email }}</p>
                      </div>
                    </div>
                  </td>
                  @for ($i = 0; $i < count($columns); $i++)
                  
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <div class="flex px-2 py-1">
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-0 text-sm leading-normal">{{ $modelData->{$columns[$i]} }}</h6>
                        {{-- <pclass="mb-0text-xsleading-tighttext-slate-400"></p> --}}
                      </div>
                    </div>
                  </td>

                  @endfor
                  {{--<td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <p class="mb-0 text-xs font-semibold leading-tight">{{ $modelData->role }}</p>
                    <p class="mb-0 text-xs leading-tight text-slate-400">Organization</p>
                  </td>
                  <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <span class="bg-gradient-to-tl from-green-600 to-lime-400 px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Online</span>
                  </td>
                  <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <span class="text-xs font-semibold leading-tight text-slate-400">23/04/18</span>
                  </td>--}}
                  <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                    <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400"> Edit </a>
                  </td>
                </tr>
                
                @endforeach
                {{ $products -> links() }}
              </tbody>
              
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- card 2 -->
</div>

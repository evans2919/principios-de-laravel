
<div>
    <div class="container">
	    <div class="row">
	        <div class="col-md-12">	            
	            <div class="border-b flex border-gray-200 lg:py-4 lg:px-10">
                    <input class="form-input  shadow-sm mt-1 block w-full rounded-md" type="text" wire:model="search" placeholder="Búsqueda" />
                       
                    <div class="form-input  shadow-sm mt-1 block ml-6">
                        <select wire:model="perPage" class="text-gray-500 rounded-md">
                        <option value="5">5 por página</option>
                        <option value="10">10 por página</option>
                        <option value="15">15 por página</option>
                        <option value="20">20 por página</option>
                        
                    </select>
                    </div>
                    @if($search !== '')
                    <button wire:click="clear" class="form-input rounded-sm border py-2 px-4 border-black  shadow-sm mt-1 block ml-6">X</button>
                    @endif
                    
                </div>
                
	           
                @if ($users->count())
                 <table class="min-w-full divide-y divide-gray-200 " >
	                <tr class="bg-gray-100 ">
	                    <th class="text-left py-3 lg:px-10 text-gray-400">Name</th>
	                    <th class="text-left lg:px-10 text-gray-400">Email</th>
	                    
	                </tr>
	                @foreach($users as $user)
	                <tr >
	                    <td class="border-b border-gray-200 py-5 lg:px-10 ">
	                        {{ $user->name }}
	                        
	                    </td>
	                    <td class="border-b border-gray-200 lg:px-10">
                            <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
	                        
	                    </td>
                        
	                </tr>
	                @endforeach
	            </table>
                <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6 lg:px-10">
                    {{ $users->links('custom.pagination-link') }}
                </div>
                @else
                <div class="bg-white px-4 lg:px-10 py-3 border-t border-gray-200 sm:px-6">
                    No hay resultados para la búsqueda "{{ $search }}" al mostrar {{ $perPage }} por página en la página {{ $page }}.
                </div>
                @endif
	            
	        </div>
	    </div>
	</div>
   
</div>

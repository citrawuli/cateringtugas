{{-- <a href="#" class="page-numbers"><i class="icon fa fa-angle-left" aria-hidden="true"></i></a>
                            <a href="#" class="page-numbers">1</a>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers current">3</a>
                            <a href="#" class="page-numbers"><i class="icon fa fa-angle-right" aria-hidden="true"></i></a> --}}
                            
      
                        @if ($paginator->hasPages())
                            <ul class="pagination">
                                {{-- Previous Page Link --}}
                                @if ($paginator->onFirstPage())
                                    <li class="page-numbers disabled"><span>&laquo;</span></li>
                                @else
                                    <li><a href="{{ $paginator->previousPageUrl() }}" class="page-numbers">&laquo;</a></li>
                                @endif
                        
                                {{-- Pagination Elements --}}
                                @foreach ($elements as $element)
                                    {{-- "Three Dots" Separator --}}
                                    @if (is_string($element))
                                        <li class="page-numbers disabled"><span>{{ $element }}</span></li>
                                    @endif
                        
                                    {{-- Array Of Links --}}
                                    @if (is_array($element))
                                        @foreach ($element as $page => $url)
                                            @if ($page == $paginator->currentPage())
                                                <li class="page-numbers current active"><span>{{ $page }}</span></li>
                                            @else
                                                <li><a href="{{ $url }}" class="page-numbers">{{ $page }}</a></li>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                        
                                {{-- Next Page Link --}}
                                @if ($paginator->hasMorePages())
                                    <li><a href="{{ $paginator->nextPageUrl() }}" class="page-numbers" rel="next">&raquo;</a></li>
                                @else
                                    <li class="page-numbers disabled"><span>&raquo;</span></li>
                                @endif
                            </ul>
                        @endif
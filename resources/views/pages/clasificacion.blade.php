@extends('layouts.app')

@section('contenido')
    <h1 class="fw-bold mb-5 text-center text-f1-white">CLASIFICACIÓN TEMPORADA 2025</h1>

    {{-- Tabs para Pilotos y Constructores --}}
    <ul class="nav nav-tabs mb-4 border-0" id="clasificacionTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pilotos-tab" data-bs-toggle="tab" data-bs-target="#pilotos" type="button" role="tab" style="background-color: transparent; border: 2px solid var(--f1-red); color: var(--f1-white); border-radius: 0; margin-right: 10px; font-weight: bold;">
                🏎️ CLASIFICACIÓN DE PILOTOS
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="constructores-tab" data-bs-toggle="tab" data-bs-target="#constructores" type="button" role="tab" style="background-color: transparent; border: 2px solid var(--f1-gray); color: var(--f1-white); border-radius: 0; font-weight: bold;">
                🏁 CLASIFICACIÓN DE CONSTRUCTORES
            </button>
        </li>
    </ul>

    <div class="tab-content" id="clasificacionTabsContent">
        
        {{-- TAB: Clasificación de Pilotos --}}
        <div class="tab-pane fade show active" id="pilotos" role="tabpanel">
            <div class="table-responsive">
                <table class="table clasificacion-table">
                    <thead>
                        <tr>
                            <th style="width: 60px;">POS</th>
                            <th>PILOTO</th>
                            <th>EQUIPO</th>
                            <th class="text-center">PUNTOS</th>
                            <th class="text-center d-none d-md-table-cell">VICTORIAS</th>
                            <th class="text-center d-none d-lg-table-cell">PODIOS</th>
                            <th class="text-center d-none d-lg-table-cell">POLES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="position-1">
                            <td>
                                <div class="badge-position badge-p1">1</div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('img/max-verstappen.png') }}" alt="Max Verstappen" class="rounded-circle me-2" style="width: 40px; height: 40px; object-fit: cover;">
                                    <div>
                                        <div class="fw-bold text-f1-white">Max Verstappen</div>
                                        <small class="text-f1-gray">#1 | 🇳🇱 Países Bajos</small>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-team-redbull">Red Bull Racing</span></td>
                            <td class="text-center"><strong class="text-f1-red" style="font-size: 1.2rem;">143</strong></td>
                            <td class="text-center d-none d-md-table-cell">3</td>
                            <td class="text-center d-none d-lg-table-cell">5</td>
                            <td class="text-center d-none d-lg-table-cell">2</td>
                        </tr>
                        <tr class="position-2">
                            <td>
                                <div class="badge-position badge-p2">2</div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('img/lewis-hamilton.jpg') }}" alt="Lewis Hamilton" class="rounded-circle me-2" style="width: 40px; height: 40px; object-fit: cover;">
                                    <div>
                                        <div class="fw-bold text-f1-white">Lewis Hamilton</div>
                                        <small class="text-f1-gray">#44 | 🇬🇧 Reino Unido</small>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-team-ferrari">Ferrari</span></td>
                            <td class="text-center"><strong class="text-f1-red" style="font-size: 1.2rem;">128</strong></td>
                            <td class="text-center d-none d-md-table-cell">2</td>
                            <td class="text-center d-none d-lg-table-cell">4</td>
                            <td class="text-center d-none d-lg-table-cell">3</td>
                        </tr>
                        <tr class="position-3">
                            <td>
                                <div class="badge-position badge-p3">3</div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('img/fernando-alonso.jpg') }}" alt="Fernando Alonso" class="rounded-circle me-2" style="width: 40px; height: 40px; object-fit: cover;">
                                    <div>
                                        <div class="fw-bold text-f1-white">Fernando Alonso</div>
                                        <small class="text-f1-gray">#14 | 🇪🇸 España</small>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-team-astonmartin">Aston Martin</span></td>
                            <td class="text-center"><strong class="text-f1-red" style="font-size: 1.2rem;">95</strong></td>
                            <td class="text-center d-none d-md-table-cell">1</td>
                            <td class="text-center d-none d-lg-table-cell">3</td>
                            <td class="text-center d-none d-lg-table-cell">1</td>
                        </tr>
                        <tr>
                            <td><div class="badge-position bg-f1-gray">4</div></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('img/carlos-sainz.jpg') }}" alt="Carlos Sainz" class="rounded-circle me-2" style="width: 40px; height: 40px; object-fit: cover;">
                                    <div>
                                        <div class="fw-bold text-f1-white">Carlos Sainz</div>
                                        <small class="text-f1-gray">#55 | 🇪🇸 España</small>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-team-williams">Williams</span></td>
                            <td class="text-center"><strong class="text-f1-white">78</strong></td>
                            <td class="text-center d-none d-md-table-cell">0</td>
                            <td class="text-center d-none d-lg-table-cell">2</td>
                            <td class="text-center d-none d-lg-table-cell">0</td>
                        </tr>
                        <tr>
                            <td><div class="badge-position bg-f1-gray">5</div></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('img/pierre-gasly.jpg') }}" alt="Pierre Gasly" class="rounded-circle me-2" style="width: 40px; height: 40px; object-fit: cover;">
                                    <div>
                                        <div class="fw-bold text-f1-white">Pierre Gasly</div>
                                        <small class="text-f1-gray">#10 | 🇫🇷 Francia</small>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-team-alpine">Alpine</span></td>
                            <td class="text-center"><strong class="text-f1-white">62</strong></td>
                            <td class="text-center d-none d-md-table-cell">0</td>
                            <td class="text-center d-none d-lg-table-cell">1</td>
                            <td class="text-center d-none d-lg-table-cell">0</td>
                        </tr>
                        <tr>
                            <td><div class="badge-position bg-f1-gray">6</div></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('img/lance-stroll.jpg') }}" alt="Lance Stroll" class="rounded-circle me-2" style="width: 40px; height: 40px; object-fit: cover;">
                                    <div>
                                        <div class="fw-bold text-f1-white">Lance Stroll</div>
                                        <small class="text-f1-gray">#18 | 🇨🇦 Canadá</small>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-team-astonmartin">Aston Martin</span></td>
                            <td class="text-center"><strong class="text-f1-white">54</strong></td>
                            <td class="text-center d-none d-md-table-cell">0</td>
                            <td class="text-center d-none d-lg-table-cell">1</td>
                            <td class="text-center d-none d-lg-table-cell">0</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- Estadísticas Destacadas --}}
            <div class="row g-4 mt-4">
                <div class="col-md-4">
                    <div class="stat-card text-center">
                        <div class="stat-number">🏆 3</div>
                        <div class="stat-label">Victorias de Verstappen</div>
                        <p class="text-f1-gray mt-2 mb-0" style="font-size: 0.85rem;">Líder en victorias</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card text-center">
                        <div class="stat-number">⚡ 3</div>
                        <div class="stat-label">Poles de Hamilton</div>
                        <p class="text-f1-gray mt-2 mb-0" style="font-size: 0.85rem;">Más poles positions</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card text-center">
                        <div class="stat-number">🎯 5</div>
                        <div class="stat-label">Podios de Verstappen</div>
                        <p class="text-f1-gray mt-2 mb-0" style="font-size: 0.85rem;">Más consistente</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- TAB: Clasificación de Constructores --}}
        <div class="tab-pane fade" id="constructores" role="tabpanel">
            <div class="table-responsive">
                <table class="table clasificacion-table">
                    <thead>
                        <tr>
                            <th style="width: 60px;">POS</th>
                            <th>EQUIPO</th>
                            <th class="text-center">PUNTOS</th>
                            <th class="text-center d-none d-md-table-cell">VICTORIAS</th>
                            <th class="text-center d-none d-lg-table-cell">PODIOS</th>
                            <th class="text-center d-none d-lg-table-cell">POLES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="position-1">
                            <td><div class="badge-position badge-p1">1</div></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('img/logo-red-bull.jpg') }}" alt="Red Bull" class="me-3" style="width: 50px; height: 35px; object-fit: contain;">
                                    <div>
                                        <div class="fw-bold text-f1-white">Red Bull Racing</div>
                                        <small class="text-f1-gray">Oracle Red Bull Racing</small>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center"><strong class="text-f1-red" style="font-size: 1.3rem;">268</strong></td>
                            <td class="text-center d-none d-md-table-cell">5</td>
                            <td class="text-center d-none d-lg-table-cell">9</td>
                            <td class="text-center d-none d-lg-table-cell">4</td>
                        </tr>
                        <tr class="position-2">
                            <td><div class="badge-position badge-p2">2</div></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('img/logo-ferrari.jpg') }}" alt="Ferrari" class="me-3" style="width: 50px; height: 35px; object-fit: contain;">
                                    <div>
                                        <div class="fw-bold text-f1-white">Ferrari</div>
                                        <small class="text-f1-gray">Scuderia Ferrari</small>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center"><strong class="text-f1-red" style="font-size: 1.3rem;">245</strong></td>
                            <td class="text-center d-none d-md-table-cell">3</td>
                            <td class="text-center d-none d-lg-table-cell">8</td>
                            <td class="text-center d-none d-lg-table-cell">5</td>
                        </tr>
                        <tr class="position-3">
                            <td><div class="badge-position badge-p3">3</div></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('img/logo-aston-martin.jpg') }}" alt="Aston Martin" class="me-3" style="width: 50px; height: 35px; object-fit: contain;">
                                    <div>
                                        <div class="fw-bold text-f1-white">Aston Martin</div>
                                        <small class="text-f1-gray">Aston Martin Aramco</small>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center"><strong class="text-f1-red" style="font-size: 1.3rem;">149</strong></td>
                            <td class="text-center d-none d-md-table-cell">1</td>
                            <td class="text-center d-none d-lg-table-cell">4</td>
                            <td class="text-center d-none d-lg-table-cell">1</td>
                        </tr>
                        <tr>
                            <td><div class="badge-position bg-f1-gray">4</div></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('img/logo-mclaren.jpg') }}" alt="McLaren" class="me-3" style="width: 50px; height: 35px; object-fit: contain;">
                                    <div>
                                        <div class="fw-bold text-f1-white">McLaren</div>
                                        <small class="text-f1-gray">McLaren F1 Team</small>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center"><strong class="text-f1-white">132</strong></td>
                            <td class="text-center d-none d-md-table-cell">1</td>
                            <td class="text-center d-none d-lg-table-cell">3</td>
                            <td class="text-center d-none d-lg-table-cell">2</td>
                        </tr>
                        <tr>
                            <td><div class="badge-position bg-f1-gray">5</div></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('img/logo-mercedes.jpg') }}" alt="Mercedes" class="me-3" style="width: 50px; height: 35px; object-fit: contain;">
                                    <div>
                                        <div class="fw-bold text-f1-white">Mercedes</div>
                                        <small class="text-f1-gray">Mercedes-AMG Petronas</small>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center"><strong class="text-f1-white">118</strong></td>
                            <td class="text-center d-none d-md-table-cell">0</td>
                            <td class="text-center d-none d-lg-table-cell">2</td>
                            <td class="text-center d-none d-lg-table-cell">1</td>
                        </tr>
                        <tr>
                            <td><div class="badge-position bg-f1-gray">6</div></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('img/logo-alpine.jpg') }}" alt="Alpine" class="me-3" style="width: 50px; height: 35px; object-fit: contain;">
                                    <div>
                                        <div class="fw-bold text-f1-white">Alpine</div>
                                        <small class="text-f1-gray">BWT Alpine F1 Team</small>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center"><strong class="text-f1-white">95</strong></td>
                            <td class="text-center d-none d-md-table-cell">0</td>
                            <td class="text-center d-none d-lg-table-cell">1</td>
                            <td class="text-center d-none d-lg-table-cell">0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <style>
        /* Estilos para los tabs */
        .nav-tabs .nav-link.active {
            background-color: var(--f1-red) !important;
            border-color: var(--f1-red) !important;
            color: var(--f1-white) !important;
        }

        .nav-tabs .nav-link:hover {
            border-color: var(--f1-red);
            color: var(--f1-red);
        }

        /* Responsive para móvil */
        @media (max-width: 768px) {
            .nav-tabs {
                flex-direction: column;
            }

            .nav-tabs .nav-item {
                width: 100%;
                margin-bottom: 10px;
            }

            .nav-tabs .nav-link {
                width: 100%;
                text-align: center;
            }
        }
    </style>
@endsection

// Made with Bob

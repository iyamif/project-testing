<!DOCTYPE html>

<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Operasi Ketupat 2024</title>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Alpine JS -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    sans: ['Plus Jakarta Sans', 'sans-serif'],
                },
                colors: {
                    darkblue: '#0f172a',
                }
            }
        }
    }
</script>

<style>
    .glass-card {
        background: rgba(30, 41, 59, 0.3);
        backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.05);
    }
    body {
        background-color: #0f172a;
    }
    /* Custom scrollbar for dark theme */
    ::-webkit-scrollbar {
        width: 8px;
    }
    ::-webkit-scrollbar-track {
        background: #0f172a;
    }
    ::-webkit-scrollbar-thumb {
        background: #1e293b;
        border-radius: 10px;
    }
    ::-webkit-scrollbar-thumb:hover {
        background: #334155;
    }
</style>


</head>
<body class="antialiased text-slate-200 overflow-x-hidden">

<!-- Background Ornaments -->
<div class="fixed inset-0 overflow-hidden pointer-events-none">
    <div class="absolute -top-[10%] -left-[5%] w-[40%] h-[40%] rounded-full bg-indigo-600/15 blur-[120px]"></div>
    <div class="absolute top-[20%] -right-[5%] w-[35%] h-[35%] rounded-full bg-blue-600/10 blur-[100px]"></div>
    <div class="absolute bottom-0 right-0 w-[30%] h-[30%] rounded-full bg-indigo-900/10 blur-[100px]"></div>
</div>

<div class="relative z-10 p-4 md:p-6 lg:p-8 w-full">
    <!-- Header: Full Width -->
    <header class="w-full mb-8 flex flex-col md:flex-row md:items-center justify-between gap-6">
        <div class="space-y-1">
            <div class="flex items-center gap-2 text-indigo-400 font-bold tracking-widest text-xs uppercase">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                Korlantas Polri
            </div>
            <h1 class="text-3xl lg:text-4xl font-extrabold tracking-tight text-white">
                Operasi Ketupat <span class="text-indigo-500">2024</span>
            </h1>
            <p class="text-slate-400 flex items-center gap-2 text-sm lg:text-base">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                Pusat Kendali Operasi Terpadu Seluruh Indonesia • Real-time Data
            </p>
        </div>
        
        <div class="flex items-center gap-4 bg-slate-800/40 backdrop-blur-md border border-slate-700/50 p-2 rounded-2xl shadow-lg">
            <div class="px-4 py-2 rounded-xl flex items-center gap-3">
                <div class="relative">
                    <div class="w-3 h-3 rounded-full bg-emerald-500"></div>
                    <div class="absolute inset-0 w-3 h-3 rounded-full bg-emerald-500 animate-ping"></div>
                </div>
                <span class="text-sm font-semibold text-emerald-400">Live Monitoring Active</span>
            </div>
            <div class="h-8 w-[1px] bg-slate-700"></div>
            <div class="pr-4 pl-2 text-xs text-slate-400 font-medium leading-tight">
                Pembaruan Terakhir:<br/><span class="text-slate-200 tracking-wide">{{ now()->format('d M Y, H:i:s') }}</span>
            </div>
        </div>
    </header>

    <main class="w-full space-y-6 lg:space-y-8" x-data="{ 
        stats: { 
            md: 42, 
            lb: 85, 
            lr: 312 
        } 
    }">
        
        <!-- Stats Cards: Full Width Adaptive -->
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6">
            <!-- Total Korban -->
            <div class="glass-card p-6 lg:p-8 rounded-[2rem] hover:bg-slate-800/50 transition-all duration-300 shadow-2xl group cursor-default">
                <div class="flex justify-between items-start mb-6">
                    <div class="p-4 rounded-2xl bg-indigo-500/10 text-indigo-400 group-hover:scale-110 transition-transform duration-500 shadow-inner">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <span class="text-xs font-bold px-3 py-1.5 rounded-xl bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">-12.5%</span>
                </div>
                <p class="text-slate-400 text-sm lg:text-base font-medium mb-1 uppercase tracking-wider">Total Korban</p>
                <h3 class="text-4xl lg:text-5xl font-black text-white tracking-tighter" x-text="stats.md + stats.lb + stats.lr">0</h3>
            </div>

            <!-- MD Card -->
            <div class="glass-card p-6 lg:p-8 rounded-[2rem] hover:bg-slate-800/50 transition-all duration-300 shadow-2xl group cursor-default">
                <div class="flex justify-between items-start mb-6">
                    <div class="p-4 rounded-2xl bg-rose-500/10 text-rose-400 group-hover:scale-110 transition-transform duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                    </div>
                    <span class="text-xs font-bold px-3 py-1.5 rounded-xl bg-rose-500/10 text-rose-400 border border-rose-500/20">+2.1%</span>
                </div>
                <p class="text-slate-400 text-sm lg:text-base font-medium mb-1 uppercase tracking-wider">Meninggal Dunia</p>
                <h3 class="text-4xl lg:text-5xl font-black text-white tracking-tighter" x-text="stats.md">0</h3>
            </div>

            <!-- LB Card -->
            <div class="glass-card p-6 lg:p-8 rounded-[2rem] hover:bg-slate-800/50 transition-all duration-300 shadow-2xl group cursor-default">
                <div class="flex justify-between items-start mb-6">
                    <div class="p-4 rounded-2xl bg-orange-500/10 text-orange-400 group-hover:scale-110 transition-transform duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
                    </div>
                    <span class="text-xs font-bold px-3 py-1.5 rounded-xl bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">-5.4%</span>
                </div>
                <p class="text-slate-400 text-sm lg:text-base font-medium mb-1 uppercase tracking-wider">Luka Berat</p>
                <h3 class="text-4xl lg:text-5xl font-black text-white tracking-tighter" x-text="stats.lb">0</h3>
            </div>

            <!-- LR Card -->
            <div class="glass-card p-6 lg:p-8 rounded-[2rem] hover:bg-slate-800/50 transition-all duration-300 shadow-2xl group cursor-default">
                <div class="flex justify-between items-start mb-6">
                    <div class="p-4 rounded-2xl bg-sky-500/10 text-sky-400 group-hover:scale-110 transition-transform duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="3 11 22 2 13 21 11 13 3 11"/></svg>
                    </div>
                    <span class="text-xs font-bold px-3 py-1.5 rounded-xl bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">-18.2%</span>
                </div>
                <p class="text-slate-400 text-sm lg:text-base font-medium mb-1 uppercase tracking-wider">Luka Ringan</p>
                <h3 class="text-4xl lg:text-5xl font-black text-white tracking-tighter" x-text="stats.lr">0</h3>
            </div>
        </div>

        <!-- Charts Section: Full Width Two-Column -->
        <div class="grid grid-cols-1 xl:grid-cols-4 gap-6 lg:gap-8">
            
            <!-- Main Trend Chart: Takes up 3 columns on large screens -->
            <div class="xl:col-span-3 glass-card p-6 lg:p-10 rounded-[2.5rem] shadow-2xl overflow-hidden relative">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-12 gap-6 relative z-10">
                    <div>
                        <h3 class="text-2xl font-bold text-white tracking-tight">Analisis Tren Kecelakaan Nasionalllllll</h3>
                        <p class="text-slate-400 mt-2">Data Komparatif Real-time H-7 hingga H+2 (2023 vs 2024)</p>
                    </div>
                    <div class="flex gap-2 p-1.5 bg-slate-900/60 rounded-2xl border border-slate-700/50 shadow-inner">
                        <button class="px-6 py-2 text-xs font-extrabold rounded-xl bg-indigo-600 text-white shadow-lg shadow-indigo-600/40 transition-all">Harian</button>
                        <button class="px-6 py-2 text-xs font-extrabold rounded-xl text-slate-400 hover:text-white transition-all">Mingguan</button>
                        <button class="px-6 py-2 text-xs font-extrabold rounded-xl text-slate-400 hover:text-white transition-all">Wilayah</button>
                    </div>
                </div>
                
                <div class="h-[450px] w-full relative z-10">
                    <canvas id="trendChart"></canvas>
                </div>
            </div>

            <!-- Distribution Chart: Takes up 1 column -->
            <div class="xl:col-span-1 glass-card p-6 lg:p-10 rounded-[2.5rem] shadow-2xl flex flex-col justify-between overflow-hidden">
                <div class="mb-10">
                    <h3 class="text-2xl font-bold text-white tracking-tight">Data Korban</h3>
                    <p class="text-slate-400 mt-2">Klasifikasi Tingkat Luka</p>
                </div>
                
                <div class="flex-grow flex items-center justify-center min-h-[300px]">
                    <canvas id="distChart"></canvas>
                </div>

                <div class="mt-10 space-y-4">
                    <div class="flex items-center justify-between p-4 rounded-2xl bg-white/5 border border-white/5 hover:border-white/10 transition-all">
                        <div class="flex items-center gap-4">
                            <div class="w-3 h-3 rounded-full bg-rose-500 shadow-[0_0_10px_rgba(244,63,94,0.5)]"></div>
                            <span class="text-sm font-semibold text-slate-300 tracking-wide">Meninggal Dunia</span>
                        </div>
                        <span class="text-base font-black text-white">10.2%</span>
                    </div>
                    <div class="flex items-center justify-between p-4 rounded-2xl bg-white/5 border border-white/5 hover:border-white/10 transition-all">
                        <div class="flex items-center gap-4">
                            <div class="w-3 h-3 rounded-full bg-orange-400 shadow-[0_0_10px_rgba(251,146,60,0.5)]"></div>
                            <span class="text-sm font-semibold text-slate-300 tracking-wide">Luka Berat</span>
                        </div>
                        <span class="text-base font-black text-white">20.8%</span>
                    </div>
                    <div class="flex items-center justify-between p-4 rounded-2xl bg-white/5 border border-white/5 hover:border-white/10 transition-all">
                        <div class="flex items-center gap-4">
                            <div class="w-3 h-3 rounded-full bg-sky-400 shadow-[0_0_10px_rgba(56,189,248,0.5)]"></div>
                            <span class="text-sm font-semibold text-slate-300 tracking-wide">Luka Ringan</span>
                        </div>
                        <span class="text-base font-black text-white">69.0%</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Summary Footer: Full Width -->
        <div class="relative overflow-hidden bg-gradient-to-br from-indigo-600 via-indigo-700 to-blue-800 p-8 lg:p-12 rounded-[2.5rem] flex flex-col xl:flex-row items-center justify-between gap-8 shadow-2xl shadow-indigo-950/50">
            <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full blur-[100px] -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-black/10 rounded-full blur-[80px] -ml-20 -mb-20"></div>
            
            <div class="relative z-10 flex items-center gap-8 text-center xl:text-left flex-col xl:flex-row">
                <div class="p-5 bg-white/15 backdrop-blur-xl rounded-3xl shadow-xl ring-1 ring-white/20 group-hover:rotate-6 transition-transform">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg>
                </div>
                <div class="max-w-2xl">
                    <h4 class="text-2xl font-black text-white tracking-tight uppercase">Dashboard Strategis Keselamatan Publik</h4>
                    <p class="text-indigo-100 mt-2 opacity-95 text-base lg:text-lg leading-relaxed font-medium">
                        Angka fatalitas nasional menunjukkan tren penurunan yang signifikan sebesar <span class="text-emerald-300 font-bold">14.2%</span>. Rekayasa lalu lintas satu arah (One Way) efektif mengurangi titik kemacetan dan risiko benturan antar kendaraan.
                    </p>
                </div>
            </div>
            
            <div class="relative z-10 flex flex-col sm:flex-row gap-4 w-full xl:w-auto">
                <button class="bg-white text-indigo-900 px-10 py-4 rounded-2xl font-extrabold text-sm hover:bg-indigo-50 transition-all shadow-xl hover:-translate-y-1 active:scale-95 whitespace-nowrap uppercase tracking-widest">
                    Ekspor Data Komplit
                </button>
                <button class="bg-indigo-500/30 text-white border border-white/20 px-10 py-4 rounded-2xl font-extrabold text-sm hover:bg-indigo-500/40 transition-all backdrop-blur-md hover:-translate-y-1 active:scale-95 whitespace-nowrap uppercase tracking-widest">
                    Konfigurasi Alert
                </button>
            </div>
        </div>
    </main>
    
    <!-- Footer Info -->
    <footer class="mt-12 text-center text-slate-500 text-sm font-medium tracking-wide">
        &copy; 2024 Command Center Korlantas Polri. Seluruh Data Terenkripsi dan Dilindungi.
    </footer>
</div>

<!-- Scripts for Charts -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Data Mock
        const labels = ['H-7', 'H-6', 'H-5', 'H-4', 'H-3', 'H-2', 'H-1', 'HARI H', 'H+1', 'H+2'];
        const dataLalu = [120, 132, 145, 160, 180, 210, 250, 190, 230, 215];
        const dataIni = [105, 110, 125, 140, 155, 190, 210, 170, 195, 180];

        // Trend Chart (Line Area)
        const ctxTrend = document.getElementById('trendChart').getContext('2d');
        const gradientIni = ctxTrend.createLinearGradient(0, 0, 0, 400);
        gradientIni.addColorStop(0, 'rgba(99, 102, 241, 0.4)');
        gradientIni.addColorStop(0.5, 'rgba(99, 102, 241, 0.1)');
        gradientIni.addColorStop(1, 'rgba(99, 102, 241, 0)');

        new Chart(ctxTrend, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Tahun 2024 (Berjalan)',
                        data: dataIni,
                        borderColor: '#6366f1',
                        borderWidth: 5,
                        backgroundColor: gradientIni,
                        fill: true,
                        tension: 0.45,
                        pointRadius: 6,
                        pointBackgroundColor: '#6366f1',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 3,
                        pointHoverRadius: 9,
                        pointHoverBorderWidth: 4
                    },
                    {
                        label: 'Tahun 2023 (Referensi)',
                        data: dataLalu,
                        borderColor: '#475569',
                        borderWidth: 2,
                        borderDash: [8, 5],
                        fill: false,
                        tension: 0.4,
                        pointRadius: 0,
                        opacity: 0.6
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                plugins: {
                    legend: { 
                        position: 'top',
                        align: 'end',
                        labels: {
                            color: '#94a3b8',
                            usePointStyle: true,
                            padding: 25,
                            font: { size: 12, weight: '600', family: 'Plus Jakarta Sans' }
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(30, 41, 59, 0.95)',
                        padding: 16,
                        cornerRadius: 16,
                        titleFont: { size: 16, weight: '800', family: 'Plus Jakarta Sans' },
                        bodyFont: { size: 14, family: 'Plus Jakarta Sans' },
                        borderColor: 'rgba(255, 255, 255, 0.1)',
                        borderWidth: 1,
                        displayColors: true,
                        boxPadding: 6
                    }
                },
                scales: {
                    y: {
                        grid: { color: 'rgba(51, 65, 85, 0.2)', drawBorder: false },
                        ticks: { 
                            color: '#64748b', 
                            font: { size: 12, weight: '600' },
                            padding: 15,
                            callback: function(value) { return value + ' Laka'; }
                        }
                    },
                    x: {
                        grid: { display: false },
                        ticks: { 
                            color: '#94a3b8', 
                            font: { size: 12, weight: '700' }, 
                            padding: 15 
                        }
                    }
                }
            }
        });

        // Distribution Chart (Bar) - Modern Thick Bars
        const ctxDist = document.getElementById('distChart').getContext('2d');
        new Chart(ctxDist, {
            type: 'bar',
            data: {
                labels: ['MD', 'LB', 'LR'],
                datasets: [{
                    data: [42, 85, 312],
                    backgroundColor: ['#f43f5e', '#fb923c', '#38bdf8'],
                    hoverBackgroundColor: ['#fb7185', '#fbbf24', '#7dd3fc'],
                    borderRadius: 16,
                    borderSkipped: false,
                    barThickness: 45
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: { legend: { display: false } },
                scales: {
                    y: { display: false },
                    x: { 
                        grid: { display: false },
                        ticks: { 
                            color: '#94a3b8', 
                            font: { size: 13, weight: '800' },
                            padding: 10
                        }
                    }
                }
            }
        });
    });
</script>


</body>
</html>
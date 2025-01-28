async function verificarArquivoJson(urlArquivo) {
    try {
        const response = await fetch(urlArquivo);
        if (!response.ok) {
            throw new Error(`Erro ao acessar o arquivo: ${response.statusText}`);
        }
        const conteudo = await response.json();
        return conteudo;
    } catch {
        return null;
    }
}

let endpointvirus = "http://localhost/Projeto2025/SimLab/Resultados/0/virus.txt";
let endpointanticorpos = "http://localhost/Projeto2025/SimLab/Resultados/0/anticorpos.txt";


(async function configurarEndpoints() {
    const id = await verificarArquivoJson("http://localhost/Projeto2025/SimLab/View/id.json");
    const idsim = await verificarArquivoJson("http://localhost/Projeto2025/SimLab/View/idsim.json");
    const nome = await verificarArquivoJson("http://localhost/Projeto2025/SimLab/View/nome.json");

    if (id !== null && idsim !== null && nome !== null) {
        endpointvirus = `http://localhost/Projeto2025/SimLab/Resultados/${id}/${idsim}/virus/${nome}.txt`;
        endpointanticorpos = `http://localhost/Projeto2025/SimLab/Resultados/${id}/${idsim}/anticorpos/${nome}.txt`;
    }

    fetchData(endpointvirus, data => gerarGrafico(data, "graficovirus", "Vírus", "#7228f3"));
    fetchData(endpointanticorpos, data => gerarGrafico(data, "graficoanticorpos", "Anticorpos", "#288FFA"));
})();

async function fetchData(endpoint, callback) {
    try {
        const response = await fetch(endpoint);
        if (!response.ok) throw new Error();
        const textData = await response.text();
        const lines = textData.split("\n").filter(line => line.trim() !== "");
        const aggregatedData = lines.map((line, index) => ({
            index: index,
            value: parseFloat(line)
        }));
        callback(aggregatedData);

    } catch (error) {
        console.error(`Erro ao buscar dados de ${endpoint}:`, error);
    }
}

function gerarGrafico(aggregatedData, elementId, label, borderColor) {
    if (!aggregatedData || aggregatedData.length === 0) {
        console.warn(`Nenhum dado encontrado para o gráfico ${label}`);
        return;
    }

    const labels = aggregatedData.map(point => point.index);
    const dataset = aggregatedData.map(point => point.value);

    const chart = document.getElementById(elementId);
    const ctx = chart.getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [
                {
                    label: label,
                    data: dataset,
                    borderColor: borderColor,
                    borderWidth: 2,
                    fill: false
                }
            ]
        },
        options: {
            responsive: true,
            animation: false,
            plugins: {
                legend: {
                    display: false,
                    labels: { color: '#FFFFFF', font: { size: 14 } }
                }
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Dias',
                        color: '#FFFFFF',
                        font: { size: 14 }
                    },
                    ticks: { color: '#FFFFFF' },
                    grid: { color: '#585858' },
                    beginAtZero: true,
                  
                },
                y: {
                    title: {
                        display: true,
                        text: label,
                        color: '#FFFFFF',
                        font: { size: 14 }
                    },
                    grid: { color: '#585858' },
                    ticks: { color: '#FFFFFF' }
                }
            }
        }
    });
}

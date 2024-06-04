#include <iostream>

class Retangulo {

private:
    float comprimento;
    float largura;

public:
    
    Retangulo(float c, float l) : comprimento(c), largura(l) {}

    float calcularArea() {
        return comprimento * largura;
    }

    float calcularPerimetro() {
        return 2 * (comprimento + largura);
    }

    void imprimirDetalhes() {
        std::cout << "Comprimento: " << comprimento << std::endl;
        std::cout << "Largura: " << largura << std::endl;
        std::cout << "Área: " << calcularArea() << std::endl;
        std::cout << "Perímetro: " << calcularPerimetro() << std::endl;
    }
};

int main() {
    float comprimento, largura;
    std::cin >> comprimento >> largura;
    Retangulo retangulo(comprimento, largura);
    retangulo.imprimirDetalhes();

    return 0;
}

#include <iostream>

class Circulo{
private:
float raio;

public:
Circulo(): raio (0.0){}
Circulo(float r):raio(r){}

    float area() const {
        return 3.14 * raio * raio;
    }

    float circunferencia() const {
        return 2 * 3.14 * raio;
    }

    
};

int main() {
    float raio;
    std::cout << "Digite o raio do circulo: ";
    std::cin >> raio;

    Circulo circulo(raio);
    std::cout << "Area: " << circulo.area() << std::endl;
    std::cout << "Circunferencia: " << circulo.circunferencia() << std::endl;

    return 0;
}

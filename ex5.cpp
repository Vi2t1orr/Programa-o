#include <iostream>
#include <string>

using namespace std;

class Pessoa {
private:
    string nome;

protected:
    int idade;

public:
    char genero;

    void setNome(const string& nome) {
        this->nome = nome;
    }

    string getNome() const {
        return nome;
    }

    void setIdade(int idade) {
        this->idade = idade;
    }

    int getIdade() const {
        return idade;
    }
};

class Funcionario : public Pessoa {
private:
    double salario;

public:
    void setSalario(double salario) {
        this->salario = salario;
    }

    double getSalario() const {
        return salario;
    }

    void mostrarDetalhes() const {
        cout << "Nome: " << getNome() << endl;
        cout << "Idade: " << getIdade() << endl;
        cout << "Genero: " << genero << endl;
        cout << "Salario: " << salario << endl;
    }
};

int main() {
    Funcionario funcionario;

    funcionario.setNome("João Silva");
    funcionario.setIdade(30);
    funcionario.genero = 'M';
    funcionario.setSalario(5000.00);

    funcionario.mostrarDetalhes();

    return 0;
}

import { useEffect, useState } from 'react';

export function DarkModeToggle({ hidden = false }) {
  // Inicializa o estado com base na preferência de tema salva no localStorage
  const [darkMode, setDarkMode] = useState<boolean>(
    localStorage.getItem('theme') === 'dark'
  );

  useEffect(() => {
    // Adiciona ou remove a classe 'dark' no <html> com base no estado darkMode
    if (darkMode) {
      document.documentElement.classList.add('dark');
      localStorage.setItem('theme', 'dark');
    } else {
      document.documentElement.classList.remove('dark');
      localStorage.setItem('theme', 'light');
    }
  }, [darkMode]);

  // Função para alternar entre claro e escuro
  const toggleDarkMode = () => {
    setDarkMode(!darkMode);
  };

  return (
    <button
      onClick={toggleDarkMode}
      className="p-2 bg-gray-100 dark:bg-gray-700 rounded-full focus:outline-none"
      aria-label="Toggle Dark Mode"
      hidden={hidden}
    >
      {darkMode ? '🌙' : '🔆'}
    </button>
  );
}

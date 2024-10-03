import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, usePage } from '@inertiajs/react';

export default function Dashboard() {

  const user = usePage().props.auth.user;
    return (
        <AuthenticatedLayout
            header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Painel de Controle</h2>}
        >
            <Head title="Início" />

            <div className="p-4">
                <div className="mx-auto">
                    <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 text-gray-900 dark:text-gray-100">Bem vindo(a) - {user.name}</div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}

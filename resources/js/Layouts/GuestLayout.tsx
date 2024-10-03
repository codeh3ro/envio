import ApplicationLogo from '@/Components/ApplicationLogoUnimed';
import { Link } from '@inertiajs/react';
import { PropsWithChildren } from 'react';

export default function Guest({ children }: PropsWithChildren) {
    return (
        <div className="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">

          <div className="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">

            <div className='w-full flex p-8 justify-center items-center'>
              <Link href="/">
                <ApplicationLogo className="w-40 h-20 fill-current text-gray-500"/>
              </Link>
            </div>

            {children}
          </div>
        </div>
    );
}

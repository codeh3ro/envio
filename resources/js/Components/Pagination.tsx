import { Link, usePage } from '@inertiajs/react';

export type Link = {
  label: string;
  url: string;
  active: boolean;
}
export function Pagination({ links }: { links: Link[] }) {

    const url = usePage().url;
    let queryString = url.substring(url.indexOf('?') + 1);
    queryString = queryString
    .split('&') // Divide pelos "&" que separam os parâmetros
    .filter(param => !param.startsWith('page=')) // Remove qualquer parâmetro que comece com "page="
    .join('&'); // Reunir os parâmetros restantes

    return (
      <nav className="text-center mt-4" aria-label="Pagination">
        {links.map((link) => (
          <Link
            preserveScroll
            href={link.url + '&' +queryString || ''}
            key={link.label}
            className={
              'inline-block py-2 px-3 rounded-lg text-gray-400 dark:text-gray-200 text-xs ' +
              (link.active ? 'bg-gray-950 ' : ' ') +
              (!link.url ? '!text-gray-500 cursor-not-allowed' : 'hover:bg-gray-950')
            }
            dangerouslySetInnerHTML={{ __html: link.label }}
          >
          </Link>
          )
        )}
      </nav>
    );
}

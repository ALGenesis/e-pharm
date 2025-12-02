
export async function fetchJSON(url, options = {}) {
    try {
        const headers = {Acceptation : 'application/JSOn',...options}
        const res = await fetch(url, { headers });

        if (res.ok) {
        return await res.json()
        }

        throw new Error('Erreur serveur', {cause : e})
    } catch (error) {
        console.error('Fetch error:', error);
    }
}
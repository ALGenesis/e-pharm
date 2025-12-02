

export function filterOptions () {
    try {
        const handleSubmit = (e) => {
            e.preventDefault()
            const searchParams = new FormData(e.currentTarget).get('search-params')?.toString().trim()

            if(searchParams === '' || searchParams === null || searchParams === undefined) return null

            return searchParams
        }

        const form = document.getElementById('filter-option')
        form.addEventListener('submit', (e) => handleSubmit)

        
    } catch (error) {
        console.error('Error in filterOptions : ', e)
    }
}